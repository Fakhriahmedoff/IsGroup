@php
     use App\Http\Controllers\Front\PagesController;
@endphp
<div id="myBtn" style="display: none;">
    <a href="#"><img src="/front/images/scrolltop.png" width="40px" alt=""></a> 
   
   </div>
<footer>
    <img src="/front/images/logo.svg" width="100%" class="footer-ram" alt="">
    <div class="container footer">
        <div class="row">
            <div class="col-lg-3">
                <ul class="footer-links">
                    <li class="footer-link"><a href="{{PagesController::getLink(1)}}">Homepage</a></li>                          
                    <li class="footer-link"><a href="{{PagesController::getLink(2)}}">Rental Cars</a></li>                          
                    <li class="footer-link"><a href="{{PagesController::getLink(445)}}">Company</a></li>                          
                    <li class="footer-link"><a href="{{PagesController::getLink(224)}}">Need to Know</a></li>                          
                    <li class="footer-link"><a href="{{PagesController::getLink(336)}}">Car Rent Online</a></li>                          
                    <li class="footer-link"><a href="{{PagesController::getLink(667)}}">Contacts</a></li>                          
                </ul>                          
            </div>                             
            <div class="col-lg-3">                          
                

                <ul class="footer-links">                          
                    <li class="footer-link"><a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/econom">Econom Class</a></li>                          
                    <li class="footer-link"><a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/business">Business Class</a></li>                          
                    <li class="footer-link"><a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/crossover">SUV</a></li>                          
                    <li class="footer-link"><a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/premium">Premium Class</a></li>                          
                    <li class="footer-link"><a href="/{{App::getLocale()}}/{{PagesController::getLink(2)}}/bandm">Buses&minivans</a></li>                          
              
                </ul>                          
            </div>                          
            <div class="col-lg-4 third">
                <ul class="footer-credentials">
                    <li class="footer-link">
                        <img src="/front/images/phone.svg" alt=""> <a href="">+994
                            (70) 700 44 44</a>
                    </li>
                    <li class="footer-link">
                        <img src="/front/images/phone.svg" alt=""> <a href="">+994
                            (70) 246 46 01</a>
                    </li>
                    <li class="footer-link">
                        <img src="/front/images/phone.svg" alt=""> <a href="">+994
                            (70) 211 46 00</a>
                    </li>
                    <li class="footer-link">
                        <img src="/front/images/phone.svg" alt=""> <a href="">+994
                            (12) 511 32 44</a>
                    </li>
                    <li class="footer-link">
                        <img src="/front/images/mail.svg" alt=""> <a href="">info@ramservis.az</a>
                    </li>
                
                    <li class="footer-link">
                        <img src="/front/images/location.svg" alt=""> <a
                        href="">27/A Akhmad Rajabli, "Сhomerd
                        Business Center" </a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-3 last">
                <img src="/front/images/colored-logo.png" alt="">
                <p class="ksati">
                    Ram Servis Rent a Car Baku
                </p>
            </div>

        </div>
        <div class=" for-c-c">
            <div class="copyright">
                &copy; Ram Servis 2003 - 20{{now()->format('y')}}, All rights reserved
            </div>
            <div class="credit">
                Site by <a href="https://jedai.az/az/saytlarin-hazirlanmasi" target="_blank"> <img width="120px" src="https://jedai.az/assets/images/JedaiLogo.png" alt=""> </a> 
            </div>
        </div>
    </footer>
</div>

    <script>
        //Get the button
        var header = document.getElementById("header");
        var mybutton = document.getElementById("myBtn");
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
            header.classList.add("sticky");
            mybutton.style.display = "block";
          }
          else {
            header.classList.remove("sticky");
            mybutton.style.display = "none";
          }
          
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        
        </script>
    <!-- SCRIPTS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit-icons.min.js"></script>
  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js" integrity="sha256-HutwTOHexZPk7phZTEa350wtMYt10g21BKrAlsStcvw=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.1.8/lightgallery.umd.js" integrity="sha256-JWngAnuoE3OJuugo7v9bF5ceRUJpa/xKKsHjgWl4ABA=" crossorigin="anonymous"></script>

         <script>
            AOS.init();
          </script>
        <script>
              function progress(percent, $element) {
            var progressBarWidth = percent * $element.width() / 100;
            $element.find('div').animate({ width: progressBarWidth }, 500).html();
            }

            NProgress.start();
        
            $(document).ready(function(){
                $("#page-content").addClass('active');
                NProgress.done();

            });
        
        </script>
        <script>
            new Splide( '#carssplide', {
            direction: 'ttb',
            height   : '600px',
            autoplay: true,
            type  : 'loop',
            breakpoints: {
		'640': {
			perPage: 1,
            height: '280px',
		},
        '1460': {
			perPage: 1,
            height: '450px',
		},
		
	    }
        } ).mount();
        </script>
    <script>
new Splide('#splide', {
    type: 'loop',
    perPage: 5,
    perMove: 1,
    breakpoints: {
		'640': {
			perPage: 1,
		},
        '1366': {
			perPage: 4,
		},
        '1600': {
			perPage: 4,
		},
        '1440': {
			perPage: 4,
		},
	}
}).mount();
</script>
    <script>
new Splide('#splide2', {
    type: 'loop',
    perPage: 5,
    perMove: 1,
    breakpoints: {
        '640': {
			perPage: 1,
		},
        '1366': {
			perPage: 4,
		},
        '1600': {
			perPage: 4,
		},
        '1440': {
			perPage: 4,
		},
	}
}).mount();
</script>
    <script>
new Splide('#splide3', {
    type: 'loop',
    perPage: 5,
    perMove: 1,
    breakpoints: {
        '640': {
			perPage: 1,
		},
        '1366': {
			perPage: 4,
		},
        '1600': {
			perPage: 4,
		},
        '1440': {
			perPage: 4,
		},
	}
}).mount();
</script>
    <script>
new Splide('#splide4', {
    type: 'loop',
    perPage: 4,
    perMove: 1,
    breakpoints: {
		'640': {
			perPage: 1,
		},
	}
}).mount();
</script>
    <script>
$(document).ready(function () {

    $('.first-button').on('click', function () {

        $('.animated-icon1').toggleClass('open');
    });
    $('.second-button').on('click', function () {

        $('.animated-icon2').toggleClass('open');
    });
    $('.third-button').on('click', function () {

        $('.animated-icon3').toggleClass('open');
    });
});
</script>
    <script>

 var swiper = new Swiper("#home-swiper", {
        effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    loop: true,
        pagination: {
          el: ".swiper-pagination",
          type: "progressbar",
     
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        },
        speed : 800,
      
        autoplay: {
          delay: 8000,
          disableOnInteraction: false,
        },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
		runCallbacksOnInit: true,
		on: {
        slideNextTransitionStart: function () {
         
        },
        slidePrevTransitionStart: function () {
           
        } 
        }
        });

	
	

var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      allowTouchMove: false,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
</script>
    <script>
/*ANIMATION INIT*/
AOS.init();
</script>



</body>

</html>