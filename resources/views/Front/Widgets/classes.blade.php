@php
     use App\Http\Controllers\Front\PagesController;
@endphp
<div class="container-fluid classes" >
        <div class="row">
            <div class="class-holder" data-aos-delay="100" data-aos="fade-up">
               
                <div class="image-wrapper">     
                    <a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/econom">
                    <img src="/front/images/econom.jpg" alt="">          
                </a>            
                </div>
                <p class="class-title">
                    Econom
                </p>

            </div>
            <div class="class-holder" data-aos-delay="250" data-aos="fade-up">
               

                <div class="image-wrapper">  <a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/business">
                    <img src="/front/images/eco.jpg" alt="">
                </a>
                </div>
                <p class="class-title">
                    Business
                </p>

            </div>
            <div class="class-holder" data-aos-delay="450" data-aos="fade-up">
               

                <div class="image-wrapper">  <a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/premium">
                    <img src="/front/images/premium.jpg" alt="">
                </a>
                </div>
                <p class="class-title">
                    Premium
                </p>

            </div>
            <div class="class-holder" data-aos-delay="650" data-aos="fade-up">
               

                <div class="image-wrapper">  <a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/bandm">
                    <img src="/front/images/bus.jpg" alt="">
                </a>
                </div>
                <p class="class-title">
                    Buses&Minivans
                </p>

            </div>
            <div class="class-holder" data-aos-delay="850" data-aos="fade-up">
               

                <div class="image-wrapper">  <a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/crossover">
                    <img src="/front/images/cattouch.jpg" alt="">
                </a>
                </div>
                <p class="class-title">
                    Crossovers&SUVs
                </p>

            </div>
        </div>
    </div>