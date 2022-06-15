@extends('mainLayout.main')
@section('about','active')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">About Us</h3>
        <div class="d-inline-flex text-white">
        </div>
    </div>
</div>
<!-- Header End -->
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7">
                <h1 class="mb-4">SMP</h1>
                <p>SMP merupakan jenjang pendidikan dasar pada pendidikan formal di Indonesia yang
                    ditempuh setelah lulus sekolah dasar (atau sederajat). Sekolah menengah pertama
                    ditempuh dalam waktu 3 tahun, mulai dari kelas 7 sampai kelas 9.</p>
                <div class="row pt-2 pb-4">
                    <div class="col-6 col-md-4">
                        <img class="img-fluid rounded" src="{{asset ('assets/img/smp.png')}}" alt="">
                    </div>
                    <div class="col-6 col-md-8">
                        <ul class="list-inline m-0">
                            <li class="py-2 border-top border-bottom"><i
                                    class="fa fa-check text-primary mr-3"></i>Matematika</li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>IPA</li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Bahasa Indonesia
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="/reg" class="btn btn-primary mt-2 py-2 px-4">Daftar</a>
                <br><br>
            </div>

            <div class="col-lg-7">
                <h1 class="mb-4">SMA</h1>
                <p>SMA merupakan jenjang pendidikan menengah pada pendidikan formal di Indonesia setelah lulus
                    sekolah menengah pertama (atau sederajat). Sekolah menengah atas ditempuh dalam waktu 3 tahun,
                    mulai dari kelas 10 sampai kelas 12.</p>
                <div class="row pt-2 pb-4">
                    <div class="col-6 col-md-4">
                        <img class="img-fluid rounded" src="{{asset ('assets/img/sma.jpg')}}" alt="">
                    </div>
                    <div class="col-6 col-md-8">
                        <ul class="list-inline m-0">
                            <li class="py-2 border-top border-bottom"><i
                                    class="fa fa-check text-primary mr-3"></i>Bahasa Indonesia</li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Bahasa Inggris
                            </li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>IPA</li>
                        </ul>
                    </div>
                </div>
                <a href="/reg" class="btn btn-primary mt-2 py-2 px-4">Daftar</a>
                <br><br>
            </div>

            <div class="col-lg-7">
                <h1 class="mb-4">SMK</h1>
                <p>SMK merupakan pendidikan formal yang menyelenggarakan pendidikan kejuruan pada jenjang
                    pendidikan menengah setara dengan SMA/MA.</p>
                <div class="row pt-2 pb-4">
                    <div class="col-6 col-md-4">
                        <img class="img-fluid rounded" src="{{asset ('assets/img/smk.png')}}" alt="">
                    </div>
                    <div class="col-6 col-md-8">
                        <ul class="list-inline m-0">
                            <li class="py-2 border-top border-bottom"><i
                                    class="fa fa-check text-primary mr-3"></i>Bahasa Indonesia</li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Bahasa Inggris
                            </li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Kejuruhan</li>
                        </ul>
                    </div>
                </div>
                <a href="/reg" class="btn btn-primary mt-2 py-2 px-4">Daftar</a>
                <br><br>
            </div>

        </div>
    </div>
</div>


@endsection