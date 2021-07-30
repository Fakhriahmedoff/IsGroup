@php
     use App\Http\Controllers\Front\PagesController;
@endphp
<!DOCTYPE html>
<html lang="az">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@if(App::getLocale() == 'az'){{$page->metatitle_az}}@elseif(App::getLocale() == 'ru'){{$page->metatitle_ru}}@else{{$page->metatitle_en}}@endif</title>
        @if(App::getLocale() == 'az')
        <meta name="description" content="{{$page->description_az}}">
        @elseif(App::getLocale() == 'ru')
        <meta name="description" content="{{$page->description_ru}}">
        @else
        <meta name="description" content="{{$page->description_en}}">
        @endif
        <meta name="keywords" content="{{$page->keywords}}">

        <link rel="icon" type="image/png" href="https://ramrent.az/front/images/nasa.png"/>

        <link rel="stylesheet" href="{{asset('front/assets/style.css?date=')}}{{now()}}">

        <link href="{{asset('front/assets/show-hide-text.css')}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
            crossorigin="anonymous">

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css"
            />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
        <link rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
            integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
            <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
            <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
  

        <!-- Font Awesome -->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
            />
        <!-- MDB -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
            rel="stylesheet"
            />
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<<<<<<< HEAD
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/css/uikit.min.css" />
  
=======
            <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
          />

>>>>>>> 8f145f55e9293620dc0d27cc7dfc16f91cc86539
        <script src="{{asset('front/assets/show-hide-text.js')}}"></script>

    </head>
    @if($page->id == 1)
    @include('Front.Widgets.nav-homepage')
    @else
    @include('Front.Widgets.nav')
<<<<<<< HEAD
    @endif
   <style>
    
   </style>
=======
    @endif
>>>>>>> 8f145f55e9293620dc0d27cc7dfc16f91cc86539
