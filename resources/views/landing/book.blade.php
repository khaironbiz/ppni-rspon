@extends('layout.landing')
@section('content')


    <section class="section contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h6>Konsultasikan Kebutuhan Software anda, <span class="alternate">FastDev</span> Akan membantu anda</h6>
                        <p>Anda akan dikenakan biaya konsultasi sebesar 50K IDR Sebagai wujud keseriusan saudara dalam pemesanan</p>
                    </div>
                </div>
            </div>
            <form action="#" class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control main" name="name" id="name" placeholder="Name">
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control main" name="email" id="email" placeholder="Email">
                </div>


                <div class="col-md-12">
                    <input type="number" class="form-control main" name="phone" id="phone" placeholder="Phone, contoh 081213798746">
                </div>
                <div class="col-md-12">
                    <select class="form-control main" name="product">
                        <option value="">----Pilih Kebutuhanmu----</option>
                        <option value="1">Landing Page</option>
                        <option value="2">Web APPS</option>
                        <option value="3">Android APPS</option>
                    </select>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-main-md">Send Message</button>
                </div>
            </form>
        </div>
    </section>


@endsection


