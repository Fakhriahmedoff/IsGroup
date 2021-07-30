@extends('Front.Layout.master')
@section('content')
@php 
$str = $page->keywords;
$keyword = explode(",",$str);
$getkeyword =  $keyword[array_rand($keyword)];
$getkeyword2 =  $keyword[array_rand($keyword)];
@endphp
<style>
    .site-breadcrumbs, .site-breadcrumbs a{
        color: black;
    }
</style>
<div id="page-content">
<div class="divider-md" style="height: 78px;"></div>

    <div class="container">
     
    </div>
    <div class="satisfaction-container-wrapper">
        
        <div class="container satisification">
            <div class="row site-breadcrumbs justify-content-flex-start " >
              @include('Front.Widgets.breadcrumb')
        </div>
        <div class="divider-md"></div>
            <div class="row text-center justify-content-center">
                <h1 class="title-text">
                    Ram Servis Rent a Car Azerbaijan
                </h1>
            </div>
            <div class="divider-md"></div>
            <div class="row stats" data-aos="fade-up">
                <div class="tire"></div>
                <div class="col-lg-6">
                    <img src="/front/images/mercedes.png" data-aos="fade-right" alt="{{$getkeyword}}">
                    <p class="stat-text" data-aos="fade-up">
                        Rent a car from the biggest car brands in Baku with best conditions. Easy and fast booking
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="holder">
                        <div class="content" data-aos="fade-left">
                        <p class="number">
                            18+
                        </p>
                        <p class="text">
                            years of experience
                        </p>
                    </div>
                    </div>
                    <div class="holder">
                        <div class="content" data-aos="fade-left">
                        <p class="number">
                            90+
                        </p>
                        <p class="text">
                            more cars
                        </p>
                    </div>
                    </div>
                    <div class="holder">
                        <div class="content" data-aos="fade-left">
                        <p class="number">
                            98%
                        </p>
                        <p class="text">
                            customer satisfaction
                        </p>
                    </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="divider-md"></div>
    <div class="container-fluid about-text company-page">
        <div class="row">
            <div class="col-lg-6 first">
                <img src="/front/images/car.png" alt="{{$getkeyword2}}">
            </div>
            <div class="col-lg-6 second">             
                <div class="main-content">
                    <p> Our company “Ram Servis” – Rent a Car Baku was founded in 2003 and since foundation is taking a niche in the automobile rental business of Azerbaijan.                    </p>
                    <p>We are pleased to offer our car rental services to the citizens and guests of our country.</p>
                    <p>The time to sign a contract takes not more 10 minutes. And the car is yours! Car Rental Company “Ram Servis” – rent a car Azerbaijan presented a full range of cars of different classes.</p>
                    <p> The list of cars in  Ram Servis Rent a Car Azerbaijan is constantly growing, we are growing out collection with models of different classes, from economy to premium.</p>
                    <p>You can book a car on our website by choosing a model, the city in which you want to get a rented car and selecting the rental period. Your car will be ready for your arrival at our office or we will deliver it to your location. To rent a car through our website, go to the link – <a style="color: white" href="/{{App::getLocale()}}/car-rental">Online Car Rental</a> </p>
                   
                </div>    
            </div>
        </div>
    </div>
    <div class="container-fluid about-text company-page " >
        <div class="row" style="border-width: 0px">
            <div class="col-lg-6 second">
               

                <div class="main-content">
                    <p>“Ram Servis” Rent a Car Azerbaijan also provides services to corporate clients, providing a professional staff and drivers. Our cars have full insurance for all cases of accidents, which greatly facilitates the resolution of the issue of operational problems.
                        Each our customer is important for us! We try to provide services to our customers!
                        We offer you exactly these advantages: reliable cars, professional employees, with experience in this field for more than 10 years. Our main asset is our reputation.
                        We are continuously working to improve the conditions for our customers. We deliver the car to customers so that they do not lose time and do not make unnecessary expenses. We work efficiently, conclude a car rental contract in 10 minutes, saving your valuable time.
                        In Ram Sevis- rent a Car Azerbaijan you will see only new cars and always-affordable prices. All our rental cars are insured. We provide a wide range of services and additional equipment for our customers. Delivery and return of the car are organizing in a place convenient for you and at the best time for you.
                        </p>
                </div>
            </div>
            <div class="col-lg-6 first" style="padding-right: 0px !important;">
                <img style="transform: scale(1)" src="/front/images/range.jpg" alt="{{$getkeyword}}">
            </div>
        </div>
    </div>
    <div class="car-class-wrapper locations">
        <div class="container">
            <div class="row title-holder text-center
                justify-content-center">
                <h1 class="title-text">
                    Our Locations
                </h1>
              <div class="divider-sm"></div>
            </div>
            <div class="row">
              @include('Front.Widgets.locations')
            </div>

        </div>
        <div class="divider-md"></div>
    </div>
@endsection
