<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sekolah Labitech</title>
    <link rel="icon" href="dist-front/img/logolabitech.png">
    <meta name="description" content="">


    {{-- Styles --}}
    @include('front.layout.styles')

    {{-- All JavaScript --}}
    @include('front.layout.scripts')

    <style>
         .testimonial-carousel .owl-dots .owl-dot,
            .scroll-top,
            .room-detail .right .widget .book-now {
                background-color: {{ $global_setting_data->theme_color_1 }};
            }

            .slider .text .button a,
            .slide-carousel.owl-carousel .owl-nav .owl-prev:hover, 
            .slide-carousel.owl-carousel .owl-nav .owl-next:hover,
            .search-section button[type="submit"],
            .room-detail-carousel.owl-carousel .owl-nav .owl-prev:hover, 
            .room-detail-carousel.owl-carousel .owl-nav .owl-next:hover,
            .room-detail .amenity .item {
                border-color: {{ $global_setting_data->theme_color_1 }}!important;
            }
            .testimonial-carousel .owl-dots .owl-dot,
            .scroll-top,
            .room-detail .right .widget .book-now {
                background-color: {{ $global_setting_data->theme_color_1 }};
            }

            .page-top .bg {
                background-color: {{ $global_setting_data->theme_color_1 }}!important;
                opacity: 1;
            }
    </style>
</head>

<body>
<div class="top fixed-top">
    {{-- Navbar --}}
    @include ('front.layout.navbar')
</div>

<main>
        @yield('main_content')
</main>


    {{-- Footer --}}
    @include('front.layout.footer');
   
   
    <div class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </div>

    {{-- Footer Script --}}
    @include('front.layout.scripts_footer')
</body>

</html>
