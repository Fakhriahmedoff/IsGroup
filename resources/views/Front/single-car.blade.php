@php
     use App\Http\Controllers\Front\PagesController;
@endphp

@extends('Front.Layout.master')
@section('content')
<style>
    .image-container{
        display: none;
        position: fixed;
        left: 0;
        top: 0;
        background: rgba(0, 0, 0, 0.356);
        height: 100vh;
        z-index: 80000000;
        padding: 0px;
        justify-content: center;
        align-items: center;
    }
    .image-no{
        cursor: pointer;
    }
    .modal-image-holder{
        width: auto;
        display: flex;
        z-index: 1;
        justify-content: center;
    }
    .btns{
        z-index: 10;
    }
    .uk-button-default{
        border-width: 0px !important;
    }
    .uk-button{
        padding: 0px !important;
    }
    .btns {
    position: absolute;
    display: none;
    gap: 1100px;
}
.abs{
    position: absolute;
    background: rgba(0, 0, 0, 0.611);
    z-index: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
#left, #right{
    background: transparent !important;
    border-width: 0px !important;
}
#left img, #right img{
    filter: invert(1) brightness(8);
    width: 45px;
}
@media only screen and (max-width:600px){
    .btns{
        gap: 260px;
    }
}
@media only screen and (min-width:1204px){
    .modal-image-holder{
    width: 1050px;
}
}
</style>


<div id="page-content" class="single-car-page">
<div class="divider-md" style="height: 120px;"></div>
<div class="container satisification">
    <div class="row site-breadcrumbs justify-content-flex-start " >
        @include('Front.Widgets.breadcrumb')
</div>
</div>
<div class="divider-sm"></div>
@php $images =json_decode($car->images) @endphp
<div class="container single-car">
    <div class="row">
        <div class="col-lg-6 ">
     
            
            <div
                style="--swiper-navigation-color: #fff;
                --swiper-pagination-color: #fff"
                class="swiper-container mySwiper2">
                <div class="swiper-wrapper single-car-image">
                    <div class="swiper-slide">
                        {{-- <div uk-lightbox> --}}
                            {{-- <a class="uk-button uk-button-default" href="{{Voyager::image($car->thumbnail)}}">    --}}
                                <img class="image-no" id="image1"  alt="{{$car->category->name}}  {{$car->getTranslatedAttribute('model',App::GetLocale(), 'fallbackLocale')}}" src="{{Voyager::image($car->thumbnail)}}" />
                            {{-- </a>
                    </div> --}}
                </div>
                    @if($images == null)
                    @else
                    @foreach ($images as $image)
                    <div class="swiper-slide">
                        {{-- <div uk-lightbox>
                            <a class="uk-button uk-button-default" href="{{Voyager::image($image)}}">   --}}
                                <img class="image-no" id="image{{$loop->iteration + 1}}" data-aos="fade-up" alt="Rent {{$car->category->name}} {{$car->getTranslatedAttribute('model',App::GetLocale(), 'fallbackLocale')}} in Baku" src="{{Voyager::image($image)}}" />
                            {{-- </a>
                    </div> --}}
                    </div>
                   
                    @endforeach
                    @endif
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper-container mySwiper" style="margin-top: 10px">
                <div class="swiper-wrapper" id="gapped">
                    <div class="swiper-slide">
                        <button class="btn single-car-slider-btn"
                            style="background-image: url('{{Voyager::image($car->thumbnail)}}');"> </button>
                    </div>   
                  @if($images == null)                 
                  @else
                  @foreach ($images as $image)
                  <div class="swiper-slide">
                    <button class="btn single-car-slider-btn"
                        style="background-image:
                        url('{{ Voyager::image($image)}}');"> </button>
                    </div>
                  @endforeach
                  @endif
                </div>
            </div>
        </div>
        <div class="image-container">
            <div class="abs"></div>
            <div class="modal-image-holder">
            </div>
            <div class="btns">
                <button id="left"><img src="/front/images/nex32.png" style="transform:rotateZ(180deg)" alt=""></button>
                <button id="right"><img src="/front/images/nex32.png" alt=""></button>
            </div>
          
        </div>
        <div class="col-lg-6">
            <h1 class="car-name">
              {{$car->category->name}} {{$car->getTranslatedAttribute('model',App::GetLocale(), 'fallbackLocale')}}
            </h1>
            <h2 class="car-price">
                {{$car->price}} AZN / day
            </h2>
            <p class="context">
                Price for 2-3-day rent
            </p>
            <ul class="discounts">
                <li class="discount">
                   <span>5-10 day rent - {{round(($car->price)*0.9)}} AZN/day (10% discount)</span>
                </li>
                <li class="discount">
                    <span>10-15 day rent - {{round(($car->price)*0.8)}} AZN/day (20% discount)</span>
                </li>
                <li class="discount">
                    <span>15-30 day rent - {{round(($car->price)*0.7)}} AZN/day (30% discount)</span>
                </li>
            </ul>
            <div class="divider-sm"></div>
            <p style="font-family: Gilroy;color:white">
                You'll need to leave a deposit of 150 AZN when you pick up a car
            </p>
            <a   href="/{{App::getLocale()}}/{{PagesController::getLink(336)}}?brand_id={{$car->category->id}}&car_id={{$car->id}}" class="btn primary-action-button">
                <svg width="45" height="18" style="margin-right:8px;" viewBox="0 0 55 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32.1772 8.76782H28.5105V10.6016H32.1772V8.76782Z" fill="#2C2C2C"/>
                    <path d="M0.878399 6.02708L7.10557 5.1378C8.24104 4.44026 9.4194 3.81582 10.6343 3.26786C14.6465 1.45052 19.0011 0.512748 23.4061 0.517597H24.4879C29.6862 0.521327 34.8014 1.82577 39.3672 4.31194L42.5099 6.02633C46.1886 6.06773 49.7964 7.04616 52.9924 8.86798C54.2913 9.6129 55.0933 10.9949 55.0955 12.4919V17.9353C55.0955 18.4419 54.6852 18.8522 54.1786 18.8522H51.1005C50.0993 21.7084 46.9723 23.2124 44.1161 22.2112C42.5438 21.6603 41.308 20.4241 40.7571 18.8522H16.2647C15.2635 21.7084 12.1365 23.2124 9.28027 22.2112C7.70837 21.6603 6.47219 20.4241 5.92124 18.8522H5.59224C5.47548 18.8522 5.35984 18.8302 5.2513 18.7869L2.28207 17.5955C0.955616 17.0703 0.0868568 15.7864 0.0917053 14.3603V6.93463C0.0917053 6.4788 0.427048 6.09198 0.878399 6.02708ZM42.3357 17.7522C42.7411 19.7362 44.6782 21.0161 46.6623 20.6106C48.6468 20.2051 49.9266 18.268 49.5211 16.2836C49.1153 14.2995 47.1782 13.0197 45.1941 13.4251C43.4868 13.7739 42.2611 15.2761 42.2614 17.0188C42.2614 17.265 42.2864 17.5108 42.3357 17.7522ZM25.7602 17.0188H40.4281C40.4281 13.9809 42.8904 11.5183 45.9282 11.5183C48.9661 11.5183 51.4287 13.9809 51.4287 17.0188H53.2621V12.4919C53.261 11.6522 52.8112 10.8767 52.0823 10.4597C49.0907 8.7516 45.7059 7.85263 42.2614 7.85151H25.7602V17.0188ZM25.7602 6.01812H38.6659L38.4891 5.92151C34.5698 3.79158 30.2163 2.58412 25.7602 2.39127V6.01812ZM23.9268 2.35098H23.408C19.7136 2.34688 16.0528 3.04815 12.6214 4.4175L14.222 6.01812H23.9268V2.35098ZM7.49985 17.7522C7.90532 19.7362 9.84241 21.0161 11.8269 20.6106C13.811 20.2051 15.0908 18.268 14.6853 16.2836C14.2798 14.2995 12.3424 13.0197 10.3583 13.4251C8.65099 13.7739 7.42525 15.2761 7.42562 17.0188C7.42562 17.265 7.45061 17.5108 7.49985 17.7522ZM1.92509 8.76801H4.67535V10.6018H1.92509V14.3603C1.92285 15.0358 2.33466 15.6439 2.96283 15.8919L5.59224 16.9479C5.59224 16.8636 5.60305 16.7801 5.60865 16.6958C5.61424 16.6115 5.61611 16.5126 5.62506 16.4209C5.63439 16.3291 5.65266 16.2373 5.66721 16.1459C5.68213 16.0542 5.69295 15.9624 5.71123 15.8792C5.72951 15.7957 5.75636 15.7032 5.78024 15.6159C5.80411 15.529 5.82239 15.4409 5.84999 15.3555C5.87722 15.2705 5.91042 15.1888 5.94138 15.1052C5.97271 15.022 6.00106 14.9359 6.03314 14.8531C6.06522 14.7706 6.10849 14.6956 6.14692 14.6177C6.18533 14.5397 6.22301 14.4543 6.26591 14.3756C6.30918 14.2969 6.35767 14.2297 6.39907 14.1566C6.44011 14.0831 6.49046 13.9996 6.54269 13.9246C6.59528 13.8493 6.64378 13.79 6.69413 13.7221C6.74449 13.6542 6.80156 13.5744 6.86013 13.5039C6.91869 13.4334 6.97352 13.3781 7.03059 13.3203C7.08729 13.2629 7.15071 13.1849 7.21375 13.1208C7.27716 13.0566 7.33945 13.0059 7.40249 12.9492C7.46591 12.8925 7.5338 12.8253 7.60355 12.7656C7.67293 12.7063 7.7438 12.6605 7.81319 12.6082C7.88294 12.556 7.9527 12.5001 8.02581 12.4512C8.09929 12.4027 8.18173 12.3598 8.26044 12.3083C8.33952 12.2569 8.40368 12.2166 8.47791 12.1774C8.55214 12.1379 8.64465 12.0965 8.72895 12.0562C8.81325 12.0159 8.87927 11.9801 8.95723 11.9472C9.03519 11.914 9.14076 11.8794 9.23215 11.8465C9.32391 11.8133 9.38359 11.7876 9.46156 11.763C9.566 11.7309 9.67306 11.7078 9.77974 11.6813C9.84949 11.6649 9.91627 11.6429 9.98677 11.6283C10.0994 11.6052 10.2151 11.5925 10.3296 11.5757C10.3975 11.5668 10.4624 11.5518 10.5303 11.5455C10.7138 11.5272 10.8969 11.5172 11.0894 11.5172C14.1262 11.5201 16.587 13.9809 16.5899 17.0177H23.9265V7.85114H13.8427C13.5994 7.85114 13.3663 7.75452 13.1947 7.58256L10.8175 5.20532C9.81965 5.68017 8.84943 6.21097 7.91129 6.79512C7.80312 6.86264 7.68226 6.90703 7.55581 6.9253L1.92509 7.72916V8.76801Z" fill="#2C2C2C"/>
                    </svg>  Rent in Now!
            </a>
     
        

        </div>
    </div>
</div>
<div class="divider-md"></div>
<div class="divider-sm"></div>
<div class="container specs">
    <div class="row">
        <div class="single-spec">
            <img src="/front/images/calendar.png" alt=""> Year: {{$car->year}}
        </div>
        <div class="single-spec">
            <img src="/front/images/car2.png" alt=""> Class:   
            @if($car->class == "business")
            @lang('translate.business')
            @elseif($car->class == "premium")
            @lang('translate.premium')
            @elseif($car->class == "bandm")
            @lang('translate.bandm')
            @elseif($car->class == "econom")
            @lang('translate.econom')
            @elseif($car->class == "crossover")
            @lang('translate.crossover')
            @endif  
        
        </div>
        <div class="single-spec">
            <img src="/front/images/gas-station.png" alt=""> Fuel: 
            @if($car->fuel == "fuel")
            @lang('translate.fuel')
            @elseif($car->fuel == "gas")
            @lang('translate.gas')
            @endif
        </div>
        <div class="single-spec">
            <img src="/front/images/transmission.png" alt=""> Transmission: {{$car->transmission}}
            
        </div>
        <div class="single-spec">
            <img src="/front/images/motor.png" alt=""> Engine: {{$car->engine}} L
        </div>
        <div class="single-spec">
            <img src="/front/images/dollar-tag.png" alt=""> Price: {{$car->price}}/AZN day
        </div>
    </div>
</div>
<div class="divider-md"></div>
<div class="container requirements">
    <div class="row requirements-title">
        Requirements for car rent
    </div>
    <div class="row">
        <div class="single-requirement">
            <span>•</span> Depost: 150 AZN
        </div>
        <div class="single-requirement">
            <span>•</span> Minimum age: 24
        </div>
        <div class="single-requirement">
            <span>•</span> Passport
        </div>
        <div class="single-requirement">
            <span>•</span> Driving License
        </div>
        <div class="single-requirement">
            <span>•</span> Prepayment for rent
        </div>
        <div class="single-requirement">
            <span>•</span> Driving experience: 2 years
        </div>
    </div>
</div>
<div class="divider-md"></div>
<div class="car-class-wrapper">
    <div class="container">
        <div class="row title-holder text-center
            justify-content-flex-start">
            <h1 class="title-text">
                Rent a Car:   @if($car->class == "business")
                @lang('translate.business')
                @elseif($car->class == "premium")
                @lang('translate.premium')
                @elseif($car->class == "bandm")
                @lang('translate.bandm')
                @elseif($car->class == "econom")
                @lang('translate.econom')
                @elseif($car->class == "crossover")
                @lang('translate.crossover')
                @endif   Class
            </h1>
            <h3 class="title-below" >
                @if($car->class == "business")
                Business class cars are very spacious cars with modern equipment and a high level of comfort.
                @elseif($car->class == "premium")
                Premium Class cars are distinguished by increased comfort and a high degree of safety.
                @elseif($car->class == "bandm")
                Small, practical and easy to park,           @lang('translate.bandm') Class cars are ideal for driving on city streets.
                @elseif($car->class == "econom")
                Small, practical and easy to park, Econom Class rental cars are ideal for driving on city streets.
                @elseif($car->class == "crossover")
                Small, practical and easy to park,          @lang('translate.crossover') Class cars are ideal for driving on city streets.
                @endif 
              
            </h3>
        </div>

    </div>

</div>

<div class="splide products-slider" id="splide">
    <div class="splide__track">
        <ul class="splide__list">
                    @foreach ($dynamicClass as $eco)
        <li class="splide__slide">
            <div class="product-cardbox">
                <span class="badge badge-secondary mybadge">
                    @if($eco->class == "business")
                    @lang('translate.business') Class
                    @elseif($eco->class == "premium")
                    @lang('translate.premium') Class
                    @elseif($eco->class == "bandm")
                    @lang('translate.bandm') Class
                    @elseif($eco->class == "econom")
                    @lang('translate.econom') Class
                    @elseif($eco->class == "crossover")
                    @lang('translate.crossover') Class
                    @else
                    All Classes
                    @endif 
                </span>
                <a href="/{{App::getLocale()}}/{{$carseo}}/{{$eco->slug}}">
                     <div class="image" style="background-image: url('{{Voyager::image($eco->thumbnail)}}')">
                
                </div>
                </a>
               
                <div class="content">
                    <p class="car-title">
                    {{$eco->category->name}} {{$eco->model}}
                    </p>
                    <p class="car-year">
                        {{$eco->year}} year
                    </p>
                    <p class="car-price">
                        {{$eco->price}} AZN / day
                    </p>
                   
                    <a href="/{{App::getLocale()}}/{{$carseo}}/{{$eco->slug}}" class="btn primary-action-button">
                        @lang('translate.rent-button')
                    </a>
                </div>
            </div>
        </li>
        @endforeach
        </ul>
        <br>
        <a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/{{$car->class}}#content" class="more-action-button">
            Show All
        </a>
    </div>
</div>
<div class="divider-md"></div>



<script>
    $(document).ready(function () {
        
   $('.single-car-image img').click(function(){
       $('.btns').show("normal").css("display", "flex");
       $('.image-container').hide().show("normal").css('display', 'flex');
       $(this).clone().appendTo(".modal-image-holder");
   })
   i = 1;
   $('#right').click(function(){
       $('.image-container .modal-image-holder img').remove();
       i++;
       if (!document.getElementById('image'+i)) {
           i=1;
           $('#image1').clone().hide().appendTo(".modal-image-holder").show('normal');
        }else{
            $('#image'+i).clone().hide().appendTo(".modal-image-holder").show('normal');
        }
   })
   
   $('#left').click(function(){
       $('.image-container .modal-image-holder img').remove();
       i--;
       if (!document.getElementById('image'+i)) {
           i=1;
        $('#image1').clone().appendTo(".modal-image-holder");
        }else{
            $('#image'+i).clone().hide().appendTo(".modal-image-holder").show('normal');
        }
   })
});
   $('.abs').click(function(){
    $('.btns').hide()
       $('.image-container .modal-image-holder img').remove();
       $('.image-container').hide("normal");
   })
   
</script>
@endsection