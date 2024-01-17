@extends('layouts.frontend')

@section('title')
    Dietify
@endsection

@section('content')
<section class="slick-slideshow">
    <div class="slick-custom">
        <img src="{{ asset('frontend/images/slideshow/buddha-bowl-dish-with-vegetables-legumes-top-view.jpeg') }}" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">Sehat itu sederhana</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Cukup Klik Sehat</p>

                        <a href="register" class="btn custom-btn">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slick-custom">
        <img src="{{ asset('frontend/images/slideshow/women-with-healthy-food-high-angle2.jpeg') }}" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">Our Team</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Ayo ketahui lebih dalam tentang kami</p>

                        <a href="about" class="btn custom-btn">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="about section-padding">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-5">Kenali<span> Program</span> Kami</h2>
            </div>

            <div class="col-lg-2 col-12 mt-auto mb-auto">
                <ul class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Perkenalan</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-youtube-tab" data-bs-toggle="pill" data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube" aria-selected="true">Cara Kerja</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-skill-tab" data-bs-toggle="pill" data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill" aria-selected="false">Kapabilitas</button>
                    </li>
                </ul>
            </div>

            <div class="col-lg-10 col-12">
                <div class="tab-content mt-2" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <img src="{{ asset('frontend/images/ciss.jpeg') }}" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-5 col-12">
                                <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                    <h4 class="mb-3">Intermittent <span>Fasting</span> </h4>
                                    <p>Pola makan yang melibatkan siklus antara periode puasa dan makan.</p>
                                    <p>Tujuan utamanya adalah meningkatkan metabolisme, mengurangi berat badan, dan mendukung kesehatan sel.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab">

                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube-nocookie.com/embed/ycPAQhWVMnU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="col-lg-5 col-12">
                                <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                    <h4 class="mb-3">Bagimana Melakukannya?</h4>
                                    <p>Dokter O'Donovan menjelaskan 5 cara melakukan Intermittent Fasting serta manfaat dan kerugiannya</p>
                                    <p>Ada beberapa contoh, yaitu puasa semalaman, puasa 16:8, puasa 5:2, dan puasa sehari penuh.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <img src="{{ asset('frontend/images/flay-lay-scale-weights.jpeg') }}" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-5 col-12">
                                <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                    <h4 class="mb-3">Presentase Keberhasilan</h4>

                                    <p>Data ini didasarkan pada survei terhadap sejumlah orang yang menerapkan pola makan ini, dan hasilnya menunjukkan.</p>

                                    <div class="skill-thumb mt-3">

                                        <strong>Pria</strong>
                                            <span class="float-end">70%</span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                                </div>

                                        <strong>Wanita</strong>
                                            <span class="float-end">60%</span>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
