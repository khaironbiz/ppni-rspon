@extends('layout.landing')
@section('content')


    <section class="section single-speaker">
        <div class="container">
            <div class="block">
                <div class="row">
                    <div class="col-lg-5 col-md-6 w-50">
                        <div class="image-block">
                            <img src="{{ $user->foto }}" class="img-fluid" alt="speaker">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="content-block">
                            <div class="name">
                                <h3>{{ $user->nama_depan }} {{ $user->nama_belakang }}</h3>
                            </div>
                            <div class="profession">
                                <p>{{ $user->nik }}</p>
                            </div>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud.laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse.
                                    <br>
                                </p>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    <br>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
                            </div>
                            <div class="social-profiles">
                                <h5>Social Profiles</h5>
                                <ul class="list-inline social-list">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                            Update Foto
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Update Foto</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('landing.profile.update.foto') }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Foto</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="file" name="foto">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="personal-info">
                            <h5>Personal Information</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi explicabo suscipit deleniti voluptatum quos nostrum iure doloremque cupiditate voluptatem a enim eaque quod perspiciatis repudiandae, mollitia adipisci ea, quidem eveniet consequatur veniam error. Adipisci, suscipit corporis repellat, soluta vitae deserunt perspiciatis labore reprehenderit sapiente provident vel maxime.</p>
                            <ul class="m-0 p-0">
                                <li>Morbi fermentum felis nec</li>
                                <li>Fermentum felis nec gravida tempus.</li>
                                <li>Morbi fermentum felis nec</li>
                                <li>Fermentum felis nec gravida tempus.</li>
                                <li>Morbi fermentum felis nec</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skills">
                            <h5>Personal Skills</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis repellat inventore at praesentium perspiciatis labore reprehenderit sapiente provident vel maxime.</p>
                            <div class="skill-bars">
                                <!-- SkillBar -->
                                <div class="skill-bar">
                                    <!-- Title -->
                                    <p>Wordpress</p>
                                    <!-- Progress Bar -->
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%;"><span>90%</span></div>
                                    </div>
                                </div>
                                <!-- SkillBar -->
                                <div class="skill-bar">
                                    <!-- Title -->
                                    <p>PHP</p>
                                    <!-- Progress Bar -->
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%;">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SkillBar -->
                                <div class="skill-bar">
                                    <!-- Title -->
                                    <p>Javascript</p>
                                    <!-- Progress Bar -->
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 60%;">
                                            <span>60%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SkillBar -->
                                <div class="skill-bar">
                                    <!-- Title -->
                                    <p>HTML</p>
                                    <!-- Progress Bar -->
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a href="{{ route('auth.logout') }}" class="btn btn-main-md">Logout</a>

                </div>
            </div>
        </div>
    </section>

@endsection
