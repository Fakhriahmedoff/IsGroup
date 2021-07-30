@foreach ($premium as $pre)
<li class="splide__slide">
    <div class="product-cardbox" data-aos="fade-right">
        <span class="badge badge-secondary mybadge">
            @if($pre->class == "business")
            @lang('translate.business') Class
            @elseif($pre->class == "premium")
            @lang('translate.premium') Class
            @elseif($pre->class == "bandm")
            @lang('translate.bandm') Class
            @elseif($pre->class == "econom")
            @lang('translate.econom') Class
            @elseif($pre->class == "crossover")
            @lang('translate.crossover') Class
            @else
            All Classes
            @endif 
        </span>
        <a href="/{{App::getLocale()}}/{{$carseo}}/{{$pre->slug}}" >   <div class="image" style="background-image: url('{{Voyager::image($pre->thumbnail)}}')">
         
        </div>  </a>
        <div class="content">
            <p class="car-title">
                <a href="/{{App::getLocale()}}/{{$carseo}}/{{$pre->slug}}" >
               {{$pre->category->name}} {{$pre->getTranslatedAttribute('model',App::GetLocale(), 'fallbackLocale')}} 
                </a>
            </p>
            <p class="car-year">
                {{$pre->year}} year
            </p>
            <p class="car-price">
                {{$pre->price}} AZN / day
            </p>
            <a href="/{{App::getLocale()}}/{{$carseo}}/{{$pre->slug}}" class="btn primary-action-button">
                @lang('translate.rent-button')
            </a>
        </div>
    </div>
</li>
@endforeach