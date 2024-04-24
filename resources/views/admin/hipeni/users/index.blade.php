@extends('layout.admin')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{ $users->total() }}
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                Add New Member
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="" method="post">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-1">
                                                    <label class="col-sm-2 col-form-label">NIK</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label class="col-sm-2 col-form-label">HP</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label class="col-sm-2 col-form-label">NIRA</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label class="col-sm-2 col-form-label">DPW</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <label class="col-sm-2 col-form-label">DPD</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 mb-2">
                                    <form action="">
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="keyword" placeholder= @if(isset($_GET['keyword'])) {{ $_GET['keyword'] }} @else {{ "Search..." }} @endif >
                                            <div class="input-group-prepend">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NIRA</th>
                                            <th>KTP</th>
                                            <th>Email</th>
                                            <th>HP</th>
                                            <th>Detail</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $number = $paginator->firstItem();
                                        @endphp
                                        @foreach($paginator as $data)
                                            <tr class="@if($data->migrate == true) {{ "bg-success" }}@endif">
                                                <td>{{ $number++ }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->nira }}</td>
                                                <td>{{ $data->noktp }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->hp }}</td>
                                                <td>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            @if($paginator->hasPages())
                                <div class="row">
                                    <div class="col-md-6  text-right">
                                        @include('pagination.bs4')
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <small>Showing {{ number_format($paginator->firstItem()) }} to {{ number_format($paginator->lastItem()) }} of {{ number_format($paginator->total())  }}</small>
                                    </div>


                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
{{--
var ajaxku;
function ajaxkota(id){
    ajaxku = buatajax();
    var url="ajax/select_kota.php";
    url=url+"?q="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChanged;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

if (!empty($_GET['q'])){
	if (ctype_digit($_GET['q'])) {
		include '../konek.php';
		$query = mysql_query("SELECT * FROM id_desa where lokasi_propinsi=$_GET[q] and lokasi_kecamatan=0 and lokasi_kelurahan=0 and lokasi_kabupatenkota!=0 order by lokasi_nama");
		echo"<option selected value=''>Pilih Kota/Kab</option>";
		while($d = mysql_fetch_array($query)){
			echo "<option value='$d[lokasi_kabupatenkota]&prop=$_GET[q]'>$d[lokasi_nama]</option>";
		}


	}
}

if (empty($_GET['kel'])){

	if (!empty($_GET['kec']) and !empty($_GET['prop'])){
		if (ctype_digit($_GET['kec']) and ctype_digit($_GET['prop'])) {
		include '../konek.php';
			$query = mysql_query("SELECT * FROM id_desa where lokasi_propinsi=$_GET[prop] and lokasi_kecamatan!=0 and lokasi_kelurahan=0 and lokasi_kabupatenkota=$_GET[kec] order by lokasi_nama");
			echo"<option selected value=''>Pilih Kecamatan</option>";
			while($d = mysql_fetch_array($query)){
				echo "<option value='$d[lokasi_kecamatan]&kec=$d[lokasi_kabupatenkota]&prop=$d[lokasi_propinsi]''>$d[lokasi_nama]</option>";
			}
		}
	}
} else {
	if (!empty($_GET['kec']) and !empty($_GET['prop'])){
		if (ctype_digit($_GET['kec']) and ctype_digit($_GET['prop'])) {
		include '../konek.php';
			$query = mysql_query("SELECT * FROM id_desa where lokasi_propinsi=$_GET[prop] and lokasi_kecamatan=$_GET[kel] and lokasi_kelurahan!=0 and lokasi_kabupatenkota=$_GET[kec] order by lokasi_nama");
			echo"<option selected value=''>Pilih Kelurahan/Desa</option>";
			while($d = mysql_fetch_array($query)){
				echo "<option value='$d[lokasi_kelurahan]'>$d[lokasi_nama]</option>";
			}
		}
	}
}
--}}


{{--<tr>
       <td><label>Provinsi</label></td>
            <td>:</td>

			<td>
				<script type="text/javascript" src="ajax_kota.js"></script>
				<select name="prop" id="prop" onchange="ajaxkota(this.value)" class="form-control"/ required>
					<option value="<? echo $data['prop']; ?>"><? echo $kodeprovinsi; ?></option>
					<?php
					$queryProvinsi=mysql_query("SELECT * FROM id_desa where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
					while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
						echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
					}
					?>
				<select>
			</td>
		</tr>
		<tr>
			<td> Kota/Kab</td><td>:</td>

			<td>
				<select name="kota" id="kota" onchange="ajaxkec(this.value)" class="form-control"/ required>
					<option value="<? echo $data['kota']; ?>"><? echo $kodekota11; ?></option>
				</select>
			</td>
		</tr>--}}

