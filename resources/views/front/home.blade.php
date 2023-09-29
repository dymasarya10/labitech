@extends('front.layout.app')
@section('main_content')

{{-- <div class="slider">
    <div class="slide-carousel owl-carousel">
        @foreach($slide_all as $item)
        <div class="item" style="background-image:url({{ asset('uploads/'.$item->image) }});">
            <div class="bg"></div>
            <div class="text">
                <h2>{{ $item->heading }}</h2>
                <p>
                    {!! $item->text !!}
                </p>

                @if($item->button_text != '')
                <div class="button">
                    <a href="{{ $item->button_url }}">{{ $item->button_text }}</a>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div> --}}


<section class="homesec1 container-fluid p-0">
    <div class="homesec1-content container-fluid d-flex align-items-center justify-content-center">
        <div class="row text-white">
            <div class="col-md-12 text-center"><img src="dist-front/img/logolabitech.png" alt="logo" class="homesec1-logo"></div>
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
                        {{-- FOREACH PLACE --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
@if($global_setting_data->home_testimonial_status == 'Show' )
<div class="testimonial" style="background-image: url(uploads/bg-testimonial.png)">
    <div class=" bg"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Kata Mereka tentang Labitech</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel">
                    @foreach($testimonial_all as $item)
                    <div class="item">
                        <div class="photo">
                            <img src="{{ asset('uploads/'.$item->photo) }}" alt="">
                        </div>
                        <div class="text">
                            <h4>{{ $item->name }}</h4>
                            <p>{{ $item->designation }}</p>
                        </div>
                        <div class="description">
                            <p>
                                {!! $item->comment !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if($global_setting_data->home_latest_post_status == 'Show' )
<div class="blog-item">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Berita Terbaru</h2>
            </div>
        </div>
        <div class="row">
            @foreach($post_all as $item)
            @if($loop->iteration>$global_setting_data->home_latest_post_total) 
            @break
            @endif
            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src="{{ asset('uploads/'.$item->image) }}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="{{ route('blog_details',$item->id) }}">{{ $item->heading }}</a></h2>
                        <div class="short-des">
                            <p>
                                {!! $item->short_desc !!}
                            </p>
                        </div>
                        <div class="button">
                            <a href="{{ route('blog_details',$item->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
</div>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                message: '{{ $error }}',
                position: 'topRight'
            });
        </script>
    @endforeach
@endif