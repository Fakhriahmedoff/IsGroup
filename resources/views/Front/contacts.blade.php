@extends('Front.Layout.master')
@section('content')
<div id="page-content">


    <div class="divider-md" style="height: 78px;"></div>
    <div class="divider-sm" style="height: 40px;"></div>
    <div class="container">
        <div class="row site-breadcrumbs justify-content-flex-start">
            @include('Front.Widgets.breadcrumb')
        </div>
        <div class="divider-sm"></div>
        <div class="row text-center justify-content-center">
            <h1 class="title-text">
                Contacts
            </h1>
        </div>
    </div>
    <div class="container-fluid contact-links" id="content">
        <div class="row">
            <div class="contact-link">
                <img src="/front/images/Location.png" alt="">
                <p class="content-link">
                    Visit Us
                </p>
            </div>
            <div class="contact-link">
                <img src="/front/images/whatsapp.png" alt="">
                <p class="content-link">
                    Write us via Whatsapp
                </p>
            </div>
            <div class="contact-link">
                <img src="/front/images/Message.png" alt="">
                <p class="content-link">
                    Email Us
                </p>
            </div>
        </div>
    </div>
    <div class="divider-md"></div>
    <div class="container-fluid contact-map">
        <div class="row">
            <div class="col-lg-6 contact-details">
                <div class="detail-card">
                    <ul>
                        <li class="detail-link">
                            <a href="tel:+994707004444"> <img src="/front/images/phone.svg" alt=""> +994
                                (70) 700 44 44</a>
                        </li>
                        <li class="detail-link">
                             <a href="tel:+994702464601"><img src="/front/images/phone.svg" alt=""> +994
                                (70) 246 46 01</a>
                        </li>
                        <li class="detail-link">
                             <a href="tel:+9942114600"><img src="/front/images/phone.svg" alt=""> +994
                                (77) 211 46 00</a>
                        </li>
                        <li class="detail-link">
                           <a href="tel:+994125113244"> <img src="/front/images/phone.svg" alt=""> +994
                                (12) 511 32 44</a>
                        </li>
                        <li class="detail-link">
                           <a href="mailto:info@ramservis.az"> <img src="/front/images/mail.svg" alt=""> info@ramservis.az</a>
                        </li>
                        <li class="detail-link">
                            <a
                                href=""><img src="/front/images/location.svg" alt=""> 27/A Akhmad Rajabli, "Сhomerd
                                Business Center" </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="map"></div>

                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
             
            </div>
        </div>
    </div>
    <div class="divider-md"></div>
    <div class="car-class-wrapper locations">
        <div class="container">
            <div class="row title-holder text-center
                justify-content-center">
                <h1 class="title-text">
                    Our Locations
                </h1>
            </div>
            <div class="row">
                @include('Front.Widgets.locations')
            </div>

        </div>
        <div class="divider-md"></div>
    </div>
</div>
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA55EEdP2LBarkvDexD4XNWsyOrl4yXHE0&callback=initMap&libraries=&v=weekly"
async
></script>
@endsection