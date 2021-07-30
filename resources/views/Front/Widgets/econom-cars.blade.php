
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
            </p>
            <a href="/{{App::getLocale()}}/{{$carseo}}/{{$eco->slug}}" class="btn primary-action-button">
                @lang('translate.rent-button')
            </a>
        </div>
    </div>
</li>
@endforeach