@php
     use App\Http\Controllers\Front\PagesController;
@endphp
    <body style="padding-right: 0px !important">
       
        <header class="home">
            <!--Navbar-->
            <nav id="header" class="navbar navbar-dark indigo darken-2 stroke sticky instantly">
                <!-- Navbar brand -->
                <a class="navbar-brand navbar-brand-logo" href="/{{App::getLocale()}}/{{PagesController::getLink(1)}}"><img
                        src="/front/images/logo.png" class="img-responsive"></a>

                    <div class="phones-nav">
                    <a href="">info@ramservis.az</a>  <a href="">+994 (70) 700 44 44</a> <a href="">+994 (70) 700 44 44</a>
                    </div>
                <!-- Collapse button -->
                <button class="navbar-toggler third-button homepage" type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent22"
                    aria-controls="navbarSupportedContent22"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="animated-icon3"><span></span><span></span><span></span></div>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse"
                    id="navbarSupportedContent22">
                    <img src="/front/images/logo.svg" class="logoforbg" alt="">
                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <div class="lang-logo">
                            <a class="navbar-brand" href="/{{App::getLocale()}}/{{PagesController::getLink(1)}}"><img
                                    src="/front/images/logo.png" class="img-responsive"
                                    style="filter:
                                    invert(1) brightness(8);"></a>
                        </div>
                        <li class="nav-item lang">
                            <ul>
                                <li><a class="nav-link" href="/az/{{$page->slug_az}}@if($car)/{{$car->slug}} @endif ">AZ</a></li>
                                <li><a class="nav-link" href="/en/{{$page->slug_en}}@if($car)/{{$car->slug}} @endif ">EN</a></li>
                                <li><a class="nav-link" href="/ru/{{$page->slug_ru}}@if($car)/{{$car->slug}}  @endif">RU</a></li>
                            </ul>

                        </li>
                        <div style="height: 40px;"></div>
                        <div class="navigation">
                        
                               @foreach ($pagess as $page)
                             <li class="nav-item">
                                <a class="nav-link" href="/{{App::getLocale()}}/{{$page['slug']}}">
                                    {{$page['title']}}  
                                </a>
                            </li>  
                       
                            @endforeach    
      
                          
                        </div>
                    </ul>
                    <!-- Links -->
                    <div class="right-panel">
                        <ul class="social-links">
                            <li><a href="#" class="instagram">
                                    <img
                                        src="http://huquqshunas.testjed.me/images/instagram_white.svg">
                                    <img
                                        src="http://huquqshunas.testjed.me/images/instagram_gold.svg">
                                </a></li>
                            <li><a href="#" class="whatsapp">
                                    <img
                                        src="http://huquqshunas.testjed.me/images/whatsapp_white.svg">
                                    <img
                                        src="http://huquqshunas.testjed.me/images/whatsapp_gold.svg">
                                </a>
                            </li>
                            <li><a href="#" class="facebook">
                                    <img
                                        src="http://huquqshunas.testjed.me/images/facebook_white.svg">
                                    <img
                                        src="http://huquqshunas.testjed.me/images/facebook_gold.svg">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Collapsible content -->

            </nav>
            <!--/.Navbar-->

            <!-- HOME PAGE TITLE -->


            <!-- END HOME PAGE TITLE -->

        </header>