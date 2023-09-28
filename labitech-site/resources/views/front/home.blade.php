@extends('layouts.app')

@section('container')
<section class="homesec1 container-fluid p-0">
    <div class="homesec1-content container-fluid d-flex align-items-center justify-content-center">
        <div class="row text-white">
            <div class="col-md-12 text-center"><img src="dist-front/img/logolabitech.png" alt="" class="homesec1-logo"></div>
            <div class="col-md-12 text-center pt-md-3 pt-3"><h1 class="homesec1-title">Sekolah Laboratorium</h1></div>
            <div class="col-md-12 text-center"><h1 class="homesec1-title">Islamic Technology</h1></div>
            <div class="col-md-12 text-center"><h4 class="homesec1-subtitle">Sekolah Para Hafizh dan Juara</h4></div>
            <div class="col-md-12 text-center pt-4">
                <div class="container">
                    <div class="row justify-content-center">
                        {{-- FOREACH PLACE --}}
                        <div class="col-md-4 col-6 d-flex justify-content-center homesec1-colchoices">
                            <div class="homesec1-choices text-center d-flex justify-content-center align-items-center p-md-3 p-2">
                                <a href="" class="">
                                    Labitech Popi Jakarta
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="homesec2 container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 col-11 text-center pt-5">
            <h3 class="homesec2-title">
                Kata Mereka Tentang Labitech
            </h3>
        </div>
    </div>
    <div class="row mt-md-5">
        <div class="col-12 text-center">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                          <div class="col-12 pt-md-3 pt-3 text-center">
                            <img src="dist-front/img/fotoktp.png" alt="" class="img-fluid homesec2-img">
                          </div>
                        </div>
                        <div class="row mt-md-3 mt-3">
                          <div class="col-12">
                            <h1 class="homesec2-profname text-white">
                              Dymas Arya Nanda
                            </h1>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 my-md-2 pb-2">
                            <h4 class="homesec2-profjob text-white">
                              Web Developer
                            </h4>
                          </div>
                        </div>
                        <div class="row justify-content-center mt-md-2">
                          <div class="col-12 col-md-10">
                            <p class="homesec2-profdescription text-white">
                              Sekolah yang bagus untuk mendidik akhlak
                            </p>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                          <div class="col-12 pt-md-3 pt-3 text-center">
                            <img src="dist-front/img/fotoktp.png" alt="" class="img-fluid homesec2-img">
                          </div>
                        </div>
                        <div class="row mt-md-3 mt-3">
                          <div class="col-12">
                            <h1 class="homesec2-profname text-white">
                              Dymas Arya Nanda
                            </h1>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 my-md-2 pb-2">
                            <h4 class="homesec2-profjob text-white">
                              Web Developer
                            </h4>
                          </div>
                        </div>
                        <div class="row justify-content-center mt-md-2">
                          <div class="col-12 col-md-10">
                            <p class="homesec2-profdescription text-white">
                              Sekolah yang bagus untuk mendidik akhlak
                            </p>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                          <div class="col-12 pt-md-3 pt-3 text-center">
                            <img src="dist-front/img/fotoktp.png" alt="" class="img-fluid homesec2-img">
                          </div>
                        </div>
                        <div class="row mt-md-3 mt-3">
                          <div class="col-12">
                            <h1 class="homesec2-profname text-white">
                              Dymas Arya Nanda
                            </h1>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 my-md-2 pb-2">
                            <h4 class="homesec2-profjob text-white">
                              Web Developer
                            </h4>
                          </div>
                        </div>
                        <div class="row justify-content-center mt-md-2">
                          <div class="col-12 col-md-10">
                            <p class="homesec2-profdescription text-white">
                              Sekolah yang bagus untuk mendidik akhlak
                            </p>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button> --}}
                <div class="carousel-indicators pt-md-5">
                    <button type="button" style="width: 10px;height: 10px;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" style="width: 10px;height: 10px;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" style="width: 10px;height: 10px;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="section3 container-fluid">
  <div class="row">
    <!-- Video -->
    <div class="col-md-6 col-12">
      <div class="row">
        <div class="col-12 text-center p-0">
          <div class="section3-video">
            <div id="carouselExampleFade" class="carousel-vid carousel slide carousel-fade">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src=" dist-front/img/lab1.jpeg" class="homesec3-thumb" alt="...">
                </div>
                <div class="carousel-item">
                  <img src=" dist-front/img/lab2.jpeg" class="homesec3-thumb" alt="...">
                </div>
                <div class="carousel-item">
                  <img src=" dist-front/img/lab3.jpeg" class="homesec3-thumb" alt="...">
                </div>
                <div class="carousel-item">
                  <img src=" dist-front/img/lab4.jpeg" class="homesec3-thumb" alt="...">
                </div>
                <div class="carousel-item">
                  <img src=" dist-front/img/lab5.jpeg" class="homesec3-thumb" alt="...">
                </div>
                <div class="carousel-item">
                  <img src=" dist-front/img/lab6.jpeg" class="homesec3-thumb" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog Kegiatan -->
    <div class="col-md-6 col-12">
      <div class="row">
        <div class="col-12 text-center p-0">
          <div class="section3-blog">
            <div id="carouselExampleDark" class="carousel-blog carousel carousel-dark slide">
              <div class="carousel-inner">
                <div class="carousel-item active "data-bs-interval="10000">
                  <img src=" dist-front/img/keg1.jpg" class="homesec3-thumb" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="homesec3-textdesc">First slide label</h5>
                    <p class="homesec3-textdesc">Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src=" dist-front/img/keg2.jpeg" class="homesec3-thumb" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="homesec3-textdesc">Second slide label</h5>
                    <p class="homesec3-textdesc">Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src=" dist-front/img/keg3.jpg" class="homesec3-thumb" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="homesec3-textdesc">Third slide label</h5>
                    <p class="homesec3-textdesc">Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev d-none d-md-block" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next d-none d-md-block" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              <div class="carousel-indicators">
                <button type="button" style="width: 10px;height: 10px;" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" style="width: 10px;height: 10px;" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" style="width: 10px;height: 10px;" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
@endsection
{{-- dist-front/img/ --}}