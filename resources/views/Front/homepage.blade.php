@php
    use App\Http\Controllers\Front\PagesController;
$str = $page->keywords;
$keyword = explode(",",$str);
$getkeyword =  $keyword[array_rand($keyword)];
$getkeyword2 =  $keyword[array_rand($keyword)];
@endphp
@extends('Front.Layout.master')
@section('content')
<div id="page-content">
    <div class="swiper-container homepage home-swiper" id="home-swiper">
        <div class="swipe-context"></div>
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide" data-slide="{{$slider->id}}">
                <div class="section-breadcrumb">
                    <div class="row">
                        <div class="col-md-6" id="content">
                            
                            <h1 class="main-title">{{$slider->car_name}}
                            </h1>
                            <h1 class="main-title subtitle" >{{$slider->subtitle}}</h1>
                            <h1 class="main-title-below">{{$slider->price}} AZN / day</h1>
                            <a class="main-button hover-6" href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}#content">
                                <span> <svg width="45" height="18" style="margin-right:8px;" viewBox="0 0 55 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M32.1772 8.76782H28.5105V10.6016H32.1772V8.76782Z" fill="#2C2C2C"/>
                                    <path d="M0.878399 6.02708L7.10557 5.1378C8.24104 4.44026 9.4194 3.81582 10.6343 3.26786C14.6465 1.45052 19.0011 0.512748 23.4061 0.517597H24.4879C29.6862 0.521327 34.8014 1.82577 39.3672 4.31194L42.5099 6.02633C46.1886 6.06773 49.7964 7.04616 52.9924 8.86798C54.2913 9.6129 55.0933 10.9949 55.0955 12.4919V17.9353C55.0955 18.4419 54.6852 18.8522 54.1786 18.8522H51.1005C50.0993 21.7084 46.9723 23.2124 44.1161 22.2112C42.5438 21.6603 41.308 20.4241 40.7571 18.8522H16.2647C15.2635 21.7084 12.1365 23.2124 9.28027 22.2112C7.70837 21.6603 6.47219 20.4241 5.92124 18.8522H5.59224C5.47548 18.8522 5.35984 18.8302 5.2513 18.7869L2.28207 17.5955C0.955616 17.0703 0.0868568 15.7864 0.0917053 14.3603V6.93463C0.0917053 6.4788 0.427048 6.09198 0.878399 6.02708ZM42.3357 17.7522C42.7411 19.7362 44.6782 21.0161 46.6623 20.6106C48.6468 20.2051 49.9266 18.268 49.5211 16.2836C49.1153 14.2995 47.1782 13.0197 45.1941 13.4251C43.4868 13.7739 42.2611 15.2761 42.2614 17.0188C42.2614 17.265 42.2864 17.5108 42.3357 17.7522ZM25.7602 17.0188H40.4281C40.4281 13.9809 42.8904 11.5183 45.9282 11.5183C48.9661 11.5183 51.4287 13.9809 51.4287 17.0188H53.2621V12.4919C53.261 11.6522 52.8112 10.8767 52.0823 10.4597C49.0907 8.7516 45.7059 7.85263 42.2614 7.85151H25.7602V17.0188ZM25.7602 6.01812H38.6659L38.4891 5.92151C34.5698 3.79158 30.2163 2.58412 25.7602 2.39127V6.01812ZM23.9268 2.35098H23.408C19.7136 2.34688 16.0528 3.04815 12.6214 4.4175L14.222 6.01812H23.9268V2.35098ZM7.49985 17.7522C7.90532 19.7362 9.84241 21.0161 11.8269 20.6106C13.811 20.2051 15.0908 18.268 14.6853 16.2836C14.2798 14.2995 12.3424 13.0197 10.3583 13.4251C8.65099 13.7739 7.42525 15.2761 7.42562 17.0188C7.42562 17.265 7.45061 17.5108 7.49985 17.7522ZM1.92509 8.76801H4.67535V10.6018H1.92509V14.3603C1.92285 15.0358 2.33466 15.6439 2.96283 15.8919L5.59224 16.9479C5.59224 16.8636 5.60305 16.7801 5.60865 16.6958C5.61424 16.6115 5.61611 16.5126 5.62506 16.4209C5.63439 16.3291 5.65266 16.2373 5.66721 16.1459C5.68213 16.0542 5.69295 15.9624 5.71123 15.8792C5.72951 15.7957 5.75636 15.7032 5.78024 15.6159C5.80411 15.529 5.82239 15.4409 5.84999 15.3555C5.87722 15.2705 5.91042 15.1888 5.94138 15.1052C5.97271 15.022 6.00106 14.9359 6.03314 14.8531C6.06522 14.7706 6.10849 14.6956 6.14692 14.6177C6.18533 14.5397 6.22301 14.4543 6.26591 14.3756C6.30918 14.2969 6.35767 14.2297 6.39907 14.1566C6.44011 14.0831 6.49046 13.9996 6.54269 13.9246C6.59528 13.8493 6.64378 13.79 6.69413 13.7221C6.74449 13.6542 6.80156 13.5744 6.86013 13.5039C6.91869 13.4334 6.97352 13.3781 7.03059 13.3203C7.08729 13.2629 7.15071 13.1849 7.21375 13.1208C7.27716 13.0566 7.33945 13.0059 7.40249 12.9492C7.46591 12.8925 7.5338 12.8253 7.60355 12.7656C7.67293 12.7063 7.7438 12.6605 7.81319 12.6082C7.88294 12.556 7.9527 12.5001 8.02581 12.4512C8.09929 12.4027 8.18173 12.3598 8.26044 12.3083C8.33952 12.2569 8.40368 12.2166 8.47791 12.1774C8.55214 12.1379 8.64465 12.0965 8.72895 12.0562C8.81325 12.0159 8.87927 11.9801 8.95723 11.9472C9.03519 11.914 9.14076 11.8794 9.23215 11.8465C9.32391 11.8133 9.38359 11.7876 9.46156 11.763C9.566 11.7309 9.67306 11.7078 9.77974 11.6813C9.84949 11.6649 9.91627 11.6429 9.98677 11.6283C10.0994 11.6052 10.2151 11.5925 10.3296 11.5757C10.3975 11.5668 10.4624 11.5518 10.5303 11.5455C10.7138 11.5272 10.8969 11.5172 11.0894 11.5172C14.1262 11.5201 16.587 13.9809 16.5899 17.0177H23.9265V7.85114H13.8427C13.5994 7.85114 13.3663 7.75452 13.1947 7.58256L10.8175 5.20532C9.81965 5.68017 8.84943 6.21097 7.91129 6.79512C7.80312 6.86264 7.68226 6.90703 7.55581 6.9253L1.92509 7.72916V8.76801Z" fill="#2C2C2C"/>
                                    </svg>
                                      Rent it now!</span>
                            </a>
                          
                          
                        </div>
                        <div class="col-md-6 animate__animated animate__fadeInRight">
                            <div class="row">
                                <div class="col-md-10">
                                    <img alt="{{$getkeyword}}" data-slideimg="{{$slider->id}}" class="img{{$slider->id}}" id="img" src="{{ Voyager::image($slider->image)}}" alt="">
                                </div>
                                <div class="col-md-2">
                                    <ul class="social-links">
                                        <li><a href="#" class="instagram">
                                                <img
                                                    srcs="http://huquqshunas.testjed.me/images/instagram_white.svg">
                                                <img
                                                    srcs="http://huquqshunas.testjed.me/images/instagram_gold.svg">
                                            </a></li>
                                        <li><a href="#" class="whatsapp">
                                                <img
                                                    srcs="http://huquqshunas.testjed.me/images/whatsapp_white.svg">
                                                <img
                                                    srcs="http://huquqshunas.testjed.me/images/whatsapp_gold.svg">
                                            </a>
                                        </li>
                                        <li><a href="#" class="facebook">
                                                <img
                                                    srcs="http://huquqshunas.testjed.me/images/facebook_white.svg">
                                                <img
                                                    srcs="http://huquqshunas.testjed.me/images/facebook_gold.svg">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            @endforeach
        </div>
                              
        <!-- Add Pagination -->

        <div  value="Click" class="swiper-button-next"></div>
      <div  value="Click" class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    @include('Front.Widgets.classes')

    <div class="satisfaction-container-wrapper  ">
        <div class="container satisification">
            <div class="row text-center justify-content-center">
                <h1 class="title-text with-logo"  data-aos="fade-up">
                    <img alt="{{$getkeyword}}" src="/front/images/small.png" alt="">
                    Rent a Car Baku, Azerbaijan
                </h1>
            </div>
            <div class="row stats" data-aos="fade-up">
                <div class="tire"></div>
                <div class="col-lg-6">
                    <img alt="{{$getkeyword2}}" src="/front/images/mercedes.png" data-aos="fade-right" alt="">
                    <p class="stat-text" data-aos="fade-up">
                        Car rental oportunity from the biggest car brands in Baku with best conditions. Easy and fast booking with “Ram Sevis “– Rent a Car Baku trough Azerbaijan.
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
                            more cars for rent
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

    <div class="car-class-wrapper">
        <div class="container">
            <div class="row title-holder text-center
                justify-content-center">
                <h1 class="title-text" data-aos="fade-up">
                    Rent Econom class cars in Baku from RAM Servis
                </h1>
                <h3 class="title-below" data-aos="fade-up">
                    Small, practical and easy to park, Econom Class rental cars are ideal for driving on city streets.
                </h3>
            </div>
        </div>
    </div>

    <div class="splide products-slider" id="splide">
        <div class="splide__track">
            <ul class="splide__list">
              @include('Front.Widgets.econom-cars')
            </ul>
            <br>
            <a href="/{{App::getLocale()}}/{{PagesController::getLink(336)}}" class="more-action-button">
                Show All
            </a>
        </div>
    </div>

    <div class="divider-lg"></div>

    <div class="container-fluid about-text forhomepage">

        <div class="row">
      
            <div class="col-lg-6 first" data-aos="fade-right">
                <div class="splide" id="carssplide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide"> <img  alt="{{$getkeyword}}" src="/front/images/mehmdu1.jpg" alt=""></li>
                            <li class="splide__slide"> <img  alt="{{$getkeyword2}}" src="/front/images/mehmdu2.jpg" alt=""></li>
                            <li class="splide__slide"> <img  alt="{{$getkeyword}}" src="/front/images/mehmdu3.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
               
            </div>
            <div class="col-lg-6 second" data-aos="fade-left">
                <div class="divider-sm"></div>
                <p class="huge-text">
                    Ram Servis <br> Rent a Car Baku
                </p>
                <div class="main-content">
                            <p>The company “Ram Servis” – Rent a Car Baku was founded in 2003 and since inception is taking a niche in the automobile business of Azerbaijan.</p>
                            <p>We are pleased to offer our services to the citizens and guests of our country.</p>
                            <p>The time to sign a contract takes not more 10 minutes. And the car is yours! Car Rental Company “Ram Servis” – rent a car in Baku presented a full range of cars.</p>          
                            <p>The list of cars in “Ram Servis” - Rent a Car Azerbaijan is constantly growing, we are growing out collection with models of different classes, from economy to premium.</p> 
                            <p>“Ram Servis” car renting company also provides services to corporate clients, providing a professional staff and drivers. Our cars have full insurance for all cases of accidents, which greatly facilitates the resolution of the issue of operational problems.</p> 
                            <p>We offer you exactly these advantages: reliable cars, professional employees, with experience in this field for more than 10 years. Our main asset is our reputation.</p> 
                            <p>In Ram Sevis Online Car Rent you will see only new cars and always-affordable prices. All our rental cars are insured. We provide a wide range of services and additional equipment for our customers to rent a car. Delivery and return of the car are organizing in a place convenient for you and at the best time for you.</p>          
            </div>
                <br>
                <a href="/{{App::getLocale()}}/{{PagesController::getLink(445)}}" class="btn primary-action-button">
                    More 
                </a>
                <div class="divider-md"></div>
            </div>
        </div>
    </div>
    <div class="divider-lg"></div>

    <div class="car-class-wrapper">
        <div class="container">
            <div class="row title-holder text-center
                justify-content-center">
                <h1 class="title-text" data-aos="fade-up">
                    Rent Business class cars in Baku from RAM Servis
                </h1>
                <h3 class="title-below" data-aos="fade-up">
                    Business class cars are very spacious cars with modern equipment and a high level of comfort.
                </h3>
            </div>
        </div>
    </div>
    <div class="splide products-slider" id="splide2">
        <div class="splide__track">
            <ul class="splide__list">
                @include('Front.Widgets.business-cars')
            </ul>
            <br>
            <a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}" class="more-action-button">
                Show All
            </a>
        </div>
    </div>

    <div class="divider-lg"></div>
  
    <div class="car-class-wrapper for-advantages">
        <div class="container">
            <div class="row title-holder text-center
                justify-content-center">
                <h1 class="title-text" data-aos="fade-up">
                    Advantages to Rent a Car from<br> Ram Servis
                </h1>
            </div>

        </div>

    </div>
    <div class="advantages for-homepage" >
    
    <div class="container advantages for-homepage" >
        <div class="row">
            <div class="col-lg-3">
                <div data-aos="fade-right" class="benefit-card" >
                    <img alt="{{$getkeyword}}" src="/front/images/car_cars.png" alt="">
                    <p  class="content">
                        More than 90 rental cars in our park
                    </p>
                    <img alt="{{$getkeyword2}}"  class="connetor-left animated"
                        src="/front/images/connector-top-left.png" alt="">
                </div>
                <div class="divider-md"></div>
                <div data-aos="fade-right" class="benefit-card" >
                    <img alt="{{$getkeyword}}" src="/front/images/cash_cars.png" alt="">
                    <p  class="content">
                        Affordable prices to rent a car
                    </p>
                    <img alt="{{$getkeyword2}}" class="connetor-left animated middle-connector"
                        src="/front/images/connector-middle-left.png" alt="">
                </div>
                <div class="divider-md"></div>
                <div data-aos="fade-right" class="benefit-card" >
                    <img alt="{{$getkeyword}}" src="/front/images/man_cars.png" alt="">
                    <p  class="content">
                        Qualified and caring staff
                    </p>
                    <img alt="{{$getkeyword2}}" class="connetor-left animated bottom-connector"
                        src="/front/images/connector-bottom-left.png" alt="">
                </div>
            </div>
            <div data-aos="fade-up" class="col-lg-6 middle">
                <img alt="{{$getkeyword}}" src="/front/images/middlecar.png" alt="">
            </div>
            <div class="col-lg-3">
                <div data-aos="fade-left" class="benefit-card">
                    <img alt="{{$getkeyword}}" src="/front/images/speedo.png" alt="">
                    <p class="content">
                        Low milage on all our rental cars
                    </p>
                    <img alt="{{$getkeyword2}}" class="connetor-right"
                        src="/front/images/connector-top-right.png" alt="">
                </div>
                <div class="divider-md"></div>
                <div data-aos="fade-left" class="benefit-card">
                    <img alt="{{$getkeyword}}" src="/front/images/loc_cars.png" alt="">
                    <p class="content">
                        We deliver a car to your location
                    </p>
                    <img alt="{{$getkeyword2}}" class="connetor-right middle-connector"
                        src="/front/images/connector-middle-right.png" alt="">
                </div>
                <div class="divider-md"></div>
                <div data-aos="fade-left" class="benefit-card">
                    <img alt="{{$getkeyword}}" src="/front/images/sec_cars.png" alt="">
                    <p class="content">
                        All our cars are fully insured
                    </p>
                    <img alt="{{$getkeyword2}}" class="connetor-right bottom-connector"
                        src="/front/images/connector-bottom-right.png" alt="">
                </div>
            </div>
        </div>
        <p class="p-content mt-2">We provide you with a wide selection of cars for rent in Baku. Our professional stuff will deliver car to you in a scheduled time. Our online booking feature allows you to rent a best car in a fastest way without additional costs.</p>
        <p class="p-content">
            If you hire a car from RAM Servis, it will be delivered to your location with all needed documents and extra services
        </p>
    </div>
    <div class="divider-lg"></div>
</div>

    <div class="car-class-wrapper">
        <div class="container">
            <div class="row title-holder text-center
                justify-content-center">
                <h1 class="title-text" data-aos="fade-up">
                    Rent Premium class cars in Baku from RAM Servis
                </h1>
                <h3 class="title-below" data-aos="fade-up">
                    Premium Class cars are distinguished by increased comfort and a high degree of safety. 
                </h3>
            </div>
        </div>
    </div>
    <div class="splide products-slider" id="splide3">
        <div class="splide__track">
            <ul class="splide__list">
                @include('Front.Widgets.premium-cars')
            </ul>
            <br>
            <a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}" class="more-action-button">
                Show All
            </a>
        </div>
    </div>
  
    <div class="divider-lg"></div>
    <div class="divider-lg"></div>
    <div class="cta-wrapper">
        <div class="container call-to-action">
            <div class="row">
                <div class="col-md-6 text-right">
                  <img alt="{{$getkeyword2}}" data-aos="fade-right"  src="/front/images/left_mercedes.png" width="89%" alt="">
                  <p class="text1"  data-aos="fade-up">Rent a car in Baku in just a few minutes</p>
                  <p class="text1"  data-aos="fade-up">Arrive at your destination in a comfortable and convenient environment - in a stylish executive rental car </p>
                </div>
                <div class="col-md-6">
                  <h1 class="title2"  data-aos="fade-left">Rent a car in Baku in just a few minutes</h1>
                  <p class="subTitle2"  data-aos="fade-left"> Contact us for a quick car rental order in Baku on the best conditions </p>
                  <div class="divider-sm"></div>
                  <form action="/{{App::getLocale()}}/{{PagesController::getLink(336)}}" method="get">
                    <div class="content" data-aos="fade-left">
                        <input type="text" name="name" required placeholder="Name" class="cta-input">
                        <input type="text" name="email" required placeholder="Email Address" class="cta-input">
                </div>
                <div class="divider-sm"></div>
                <button type="submit" class="btn primary-action-button reserve" data-aos="fade-up"> Reserve! </button>

                  </form>
                  
                                   </div>
            </div>
          
        </div>
        <div class="divider-sm"></div>
        <div class="divider-sm"></div>
    </div>

    <div class="car-class-wrapper feedback" >
        <div class="container">
            <div class="row title-holder text-center
                justify-content-center">
                <h1 class="title-text" data-aos="fade-up">
                    Feedback From Our Customers
                </h1>
            </div>

            <div class="splide" id="splide4" data-aos="fade-up">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($letters as $letter)
                        
                        <li class="splide__slide">
                            
                            <div uk-lightbox="animation: fade">
                                <a href="{{ Voyager::image($letter->image)}}"> <img alt="{{$getkeyword}}"   class="img-fluid shadow-2-strong" width="90%" src="{{ Voyager::image($letter->image)}}" alt=""></a>
                           
                            </div>
                        </li>
                   
                        @endforeach
                   
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="divider-md">

        </div>
    </div>

    <div class="cta-wrapper">
        <div class="container call-to-action">
            <div class="row">
    
                <div class="col-md-6 text-right p-0">
                    <div class="divider-sm"></div>
                    <div class="divider-sm"></div>
                    <ul uk-accordion data-aos="fade-right">
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">How long do I have to own a driving license to for car hire from Ram Servis?  </a>
                            <div class="uk-accordion-content">
                                <p>You should have min. 2 years of driving experience to rent a car from “Ram Servis” car renting company</p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">İ need some information about that, in what age can I rent a car from “Ram Servis” in Baku?  </a>
                            <div class="uk-accordion-content">
                                <p>Your age must be 24 or more to have opportunity to rent a rental car</p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">What is a minimal deposit amount for renting a car at Ram Rent? </a>
                            <div class="uk-accordion-content">
                                <p>Deposit amount for car hiring in Baku from “Ram Rent” is 150 AZN</p>
                            </div>
                        </li>
                        <li>
                            <a class="uk-accordion-title" href="#">What documents I must have to rent a car from car booking company Ram Servis?  </a>
                            <div class="uk-accordion-content">
                                <p>You must have a driving license and passport for car renting in Azerbaijan.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                  <h1 class="title2"  data-aos="fade-left">Rent a car in Baku in just a few minutes</h1>
                  <p class="subTitle2"  data-aos="fade-left"> Contact us for a quick car rental order in Baku on the best conditions </p>
                  <div class="divider-sm"></div>
                  <form action="/{{App::getLocale()}}/{{PagesController::getLink(336)}}" method="get">
                    <div class="content" data-aos="fade-left">
                        <input type="text" name="name" required placeholder="Name" class="cta-input">
                        <input type="text" name="email" required placeholder="Email Address" class="cta-input">
                </div>
                <div class="divider-sm"></div>
                <button type="submit" class="btn primary-action-button reserve" data-aos="fade-up"> Reserve! </button>

                  </form>
                </div>
            </div>
          
        </div>
        <div class="divider-sm"></div>
        <div class="divider-sm"></div>
    </div>

    <div class="car-class-wrapper locations">
        <div class="container">
            <div class="row title-holder text-center
                justify-content-center">
                <h1 class="title-text" data-aos="fade-up">
                    Our Locations
                </h1>
                <h3 class="title-below" data-aos="fade-up">
                    You can rent a car from these locations or we will deliver car to your location
                </h3>
            </div>
            <div class="row locs" data-aos="fade-up">
                <div class="tire-for-one" ></div>
                <div class="tire-for-two" ></div>
        

                @foreach ($locations as $location)
                @php
                $var = $location->getCoordinates();
                $variki = $var[0];
                $variki['lat'];
                @endphp
        
                    <div data-lng="{{$variki['lng']}}" data-lat="{{$variki['lat']}}" class="location-card">
                     
                        <img src="/front/images/locationicon.png" alt="">
                        <p class="text">   <a href="/{{App::getLocale()}}/{{PagesController::getLink(667)}}?location_id={{$location->id}}#content">
                            {{$location->getTranslatedAttribute('name',App::GetLocale(), 'en')}} </a>
                        </p>
                    
                   
                    </div>
             
               
                @endforeach     
            </div>
        </div>
        <div class="divider-md">
        </div>
    </div>

   
@endsection