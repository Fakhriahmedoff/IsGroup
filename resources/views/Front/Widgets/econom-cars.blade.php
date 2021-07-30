<<<<<<< HEAD

@foreach ($econom as $i=>$eco)
<li class="splide__slide" >
    
    <div class="product-cardbox"  data-aos-delay="{{$loop->iteration * 50}}" data-aos="fade-right">
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
        <a href="/{{App::getLocale()}}/{{$carseo}}/{{$eco->slug}}" >  
            <a href="/{{App::getLocale()}}/{{$carseo}}/{{$eco->slug}}" >  <div  class="image" style="background-image: url('{{Voyager::image($eco->thumbnail)}}')">
            </div>       </a>
        </a>
        <div class="content">
            <p class="car-title">
                <a href="/{{App::getLocale()}}/{{$carseo}}/{{$eco->slug}}" >
                       {{$eco->category->name}} {{$eco->getTranslatedAttribute('model',App::GetLocale(), 'fallbackLocale')}}  
                </a>
            </p>
            <p class="car-year">
                {{$eco->year}} year  
            </p>
            <p class="car-price">
                {{$eco->price}} AZN / day 
=======
@foreach ($econom as $eco)
<li class="splide__slide" >
    <div class="product-cardbox" data-aos="fade-right">
        <div class="image" style="background-image: url('{{Voyager::image($eco->thumbnail)}}')">
         
        </div>
        <div class="content">
            <p class="car-title">
               {{$eco->category->name}} {{$eco->model}}
            </p>
            <p class="car-year">
                {{$eco->year}} year
            </p>
            <p class="car-price">
                {{$eco->price}} AZN / day
>>>>>>> 8f145f55e9293620dc0d27cc7dfc16f91cc86539
            </p>
            <a href="/{{App::getLocale()}}/{{$carseo}}/{{$eco->slug}}" class="btn primary-action-button">
                @lang('translate.rent-button')
            </a>
        </div>
    </div>
</li>
@endforeach