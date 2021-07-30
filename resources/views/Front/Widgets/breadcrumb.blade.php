@php
use App\Http\Controllers\Front\PagesController;
@endphp
 <a href="/{{App::getLocale()}}/{{PagesController::getLink(1)}}"  class="single-breadcrumb">@lang('translate.homepage')</a> / <a href="#" class="single-breadcrumb active">@if(App::getLocale() == 'az'){{$page->title_az}}@elseif(App::getLocale() == 'ru'){{$page->title_ru}}@else{{$page->title_en}}@endif</a>