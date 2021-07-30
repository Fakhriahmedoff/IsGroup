@php
     use App\Http\Controllers\Front\PagesController;
@endphp
@extends('Front.Layout.master')
@section('content')
<audio id="audio" src="/front/lock.mp3"></audio>
<div id="page-content" >
    <div class="divider-md" style="height: 78px;"></div>
    <div class="divider-sm" style="height: 40px;"></div>
    <div class="container">
        <div class="row site-breadcrumbs justify-content-flex-start">
            @include('Front.Widgets.breadcrumb')
        </div>
        <div class="divider-sm"></div>
        <div class="row text-center justify-content-center">
            <h1 class="title-text mob">
                Online Car Booking
            </h1>
            <h3 class="title-below" data-aos="fade-up">
                Еasy and simple online car booking in Baku just in  a few clicks
            </h3>
        </div>
    </div>
    <div class="container rent-form">
        <form action="{{route('payment')}}" method="POST">
            @csrf
            @method('post')
  
        <div class="form-wrapper">
<<<<<<< HEAD
            <div  class="rent-form-online">
                <img src="/front/images/logo.svg" alt="" class="ram-logo-for-online">
                <div id="carcard">

                </div>
            
                <select placeholder="Car brand" type="text" name="brand" id="brandselect" required class="width-md rent-input">
                    @if(Request::has('brand_id'))
                    <option style="color: black; text-transform:uppercase" value="{{Request::input('brand_id')}}">{{PagesController::getBrandById(Request::input('brand_id'))}}</option>
                    @else
                    <option style="color: black" value="0">Choose Brand</option>
                    @endif
                   
                    @foreach($brands as $brand)
                    <option style="color: black; text-transform:uppercase" value="{{$brand->id}}">{{$brand->name}} {{$brand->year}}</option>
                    @endforeach
                    
                </select>
                <select placeholder="Car brand" type="text" name="car" id="carselect" required class="width-md rent-input">
                    @if(Request::has('car_id'))
                    <option style="color: black" value="{{Request::input('car_id')}}">{{PagesController::getCarById(Request::input('car_id'))}}</option>
                    @else
                    <option style="color: black" value="0">Choose a car</option>
                    @endif
                   
                   
                    @foreach($cars as $car)
                    {{-- <option style="color: black" data-carid="{{$car->id}}" value="{{$car->id}}">{{$car->model}}</option> --}}


                    @endforeach
                   
                </select>
                <select placeholder="Car brand" type="text" name="location" required class="width-lg rent-input">
                    <option style="color: black" value="0">Choose pickup location</option>
                    @foreach($locations as $location)
                    <option style="color: black" value="1">{{$location->name}}</option>
                    @endforeach
                   
                </select>
                <input placeholder="Car brand" type="date" data-date-inline-picker="true"  name="pickup_date"required  id="firstDate" class="datetime rent-input">
                <input placeholder="Car brand" type="time" name="pickup_time"  value="12:00:00" class="datetimetime rent-input">
                <input placeholder="Car brand" type="date" data-date-inline-picker="true"  name="dropoff_date"required  id="secondDate" onchange="showDays()"  class="datetime rent-input">
                <input placeholder="Car brand" type="time" name="dropoff_time"  value="12:00:00" class="datetimetime rent-input">
                <input placeholder="Name Surname*" value="@if(Request::has('name')) {{Request::input('name')}} @endif" type="text" required name="names" class="width-sm rent-input">
                <input placeholder="Phone*" type="text" name="phone" required class="width-sm rent-input">
                <input placeholder="Email" value="@if(Request::has('email')) {{Request::input('email')}} @endif" type="text" name="email" required class="width-sm rent-input">
                <textarea  placeholder="Any other suggestions" name="suggestions" id="" class="width-lg rent-textarea" cols="30" rows="10"></textarea>
=======
            <form action="" class="rent-form-online">
                
                <select placeholder="Car brand" type="text" class="width-md rent-input">
                    <option value="1">option1</option>
                </select>
                <select placeholder="Car brand" type="text" class="width-md rent-input">
                    <option value="1">option1</option>
                </select>
                <select placeholder="Car brand" type="text" class="width-lg rent-input">
                    <option value="1">option1</option>
                </select>
                <input placeholder="Car brand" type="datetime" class="datetime rent-input">
                <input placeholder="Car brand" type="datetime" class="datetime rent-input">
                <input placeholder="Name, Surname*" type="text" class="width-sm rent-input">
                <input placeholder="Phone*" type="text" class="width-sm rent-input">
                <input placeholder="Email" type="text" class="width-sm rent-input">
                <textarea  placeholder="Any other suggestions" name="" id="" class="width-lg rent-textarea" cols="30" rows="10"></textarea>
>>>>>>> 8f145f55e9293620dc0d27cc7dfc16f91cc86539
               </form>
        </div>
        <div class="divider-sm"></div>
        <div class="extras">
            <h3 class="p-title">
                Extras for Rental Cars
            </h3>
            <div class="divider-sm"></div>
            <div class="row">
                <div class="extra-card">

                    <input name="checkone" value="1" id="chone" type="checkbox"> <label for="chone">BABY SEAT (10 AZN/day)</label> 
                </div>
                <div class="extra-card">

                    <input name="checkone" value="2" id="chwo" type="checkbox"> <label for="chwo">PERSONAL DRİVER (20 AZN/ day)</label> 
                </div>
            </div>
        </div>
        <div class="divider-md"></div>
        <div class="payment-selection">
            <h3 class="p-title">Payment Selection</h3>
            <div class="divider-sm"></div>
            <div class="row">
                <div class="payment-card">
                    <input name="payment_type" id="chek_first" value="1" type="radio">
                    <label for="chek_first">
                        <div class="content">
                        <img src="/front/images/credit-card.png" alt="">
                        <p>Online payment (VISA, Master Card)</p>
                    </div>
                    </label>
                    
                    
                </div>
                <div class="payment-card">
                    <input name="payment_type" id="chek_two" value="2" type="radio">
                    <label for="chek_two">
                        <div class="content">
                        <img src="/front/images/withcash.png" alt="">
                        <p>Cash</p>
                    </div>
                    </label>
                    
                    
                </div>
                <div class="payment-card">
                    <input name="payment_type" id="chek_three" value="3" type="radio">
                    <label for="chek_three">
                        <div class="content">
                        <img src="/front/images/pos.png" alt="">
                        <p>POS terminal (VISA, MasteCard)</p>
                    </div>
                    </label>
                    
                    
                </div>
            </div>
        </div>
        <div class="divider-md"></div>
        <div class="totals">
            <div class="content">
                <p class="addprice"> Car Price for <span id="dayone"></span> days =  <span id="carprice"> 0 </span> <span class="price">AZN</span></p>
                <p class="addprice"> Additionals for  <span id="daytwo"></span>  days : <span style="display: none" id="firstholder">   </span>  </p>
                <p class="addprice"> <span style="display: none" id="extra1"> Baby seat = <span id="additionalspricefirst"> 0 </span> </span>  <span id="extra2" style="display: none"> Personal driver  =  <span id="additionalsprice"> 0 </span></span>  </p>
                <p class="totalprice">TOTAL PRICE =  <span id="totalprice"> 0 </span><span class="price"> AZN</span></p>
            </div>
        </div>
        <input type="hidden" id="total_payed" name="total_payed" value="0">
        <input type="hidden" id="todal_days" name="todal_days" value="">
        <div class="divider-sm"></div>
        
        <button type="submit" href="#" class="btn primary-action-button float-right">PROCEED TO CHECKOUT</button>
    </form>

    </div>
</div>
    <div id="end" class="divider-md" style="height: 78px;"></div>
    <div class="divider-sm" style="height: 40px;"></div>
    <script>
   function showDays(){

        var start = $('#firstDate').val();
        var end = $('#secondDate').val();

        var startDay = new Date(start);
        var endDay = new Date(end);
        var millisecondsPerDay = 1000 * 60 * 60 * 24;

        var millisBetween = endDay.getTime() - startDay.getTime();
        var days = millisBetween / millisecondsPerDay;
        // Round down.
        var dayone = document.getElementById('dayone');
        var daytwo = document.getElementById('daytwo');
        var todal_days = document.getElementById('todal_days');
        var total_price = document.getElementById('total_payed');
        if(days < 0){
            alert("Zəhmət olmasa tarixi düzgün doldurun")
            dayone.innerHTML = 1;
            daytwo.innerHTML = 1;
           
        }else{
            todal_days.value = days;
            dayone.innerHTML = days;
            daytwo.innerHTML = days;
        }
    }
        
    $(document).ready(function(){
          $("#chone").change(function(){
              console.log(calc)
            if ($(this).is(':checked')) {
               $('#additionalspricefirst').html(calc * 10);
               $('#extra1').show();
               $('#firstholder').show();
               $('#totalprice').html($("#total_payed").val());
            }else {
                $('#extra1').hide();
                $('#firstholder').hide();
                $('#additionalspricefirst').html(0);
            }
        });
    });
    $(document).ready(function(){
          $("#chwo").change(function(){
              console.log(calc)
            if ($(this).is(':checked')) {
               $('#additionalsprice').html(calc * 20);
               $('#extra2').show();
               $('#totalprice').html($("#total_payed").val());
            }else {
                $('#extra2').hide();
                $('#additionalsprice').html(0);
            }
        });
        
    });
        $(document).ready(function(){
            
          $("#secondDate").change(function(){
           carid = $("#carselect").val();
           calc =  $("#todal_days").val();
            $.get("/getcardata?id=" + carid, function(data, status){
                if(calc){
                    if(calc  < 5 ){
                        $("#carprice").html(data.price * calc)
                        $('#total_payed').val(data.price * calc)
                    }
                    if(calc > 5 && calc < 10){
                        $("#carprice").html(Math.round((data.price * calc) * 0.9)) 
                        $('#total_payed').val(Math.round((data.price * calc) * 0.9))
                    }
                    if(calc > 10 && calc < 15){
                        $("#carprice").html(Math.round((data.price * calc) * 0.8)) 
                        $('#total_payed').val(Math.round((data.price * calc) * 0.8))
                    }
                    if(calc > 15 ){
                        $("#carprice").html(Math.round((data.price * calc) * 0.7)) 
                        $('#total_payed').val(Math.round((data.price * calc) * 0.7))
                    } 
                };
            });
          });
        });



        </script>
<script>
       $("#carselect").change(function(){

           carid = $("#carselect").val();
           calc =  $("#todal_days").val();
            $.get("/getcardata?id=" + carid, function(data, status){
                if(calc){
                    if(calc  < 5 ){
                        $("#carprice").html(data.price * calc)
                        $('#total_payed').val(data.price * calc)
                    }
                    if(calc > 5 && calc < 10){
                        $("#carprice").html(Math.round((data.price * calc) * 0.9)) 
                        $('#total_payed').val(Math.round((data.price * calc) * 0.9))
                    }
                    if(calc > 10 && calc < 15){
                        $("#carprice").html(Math.round((data.price * calc) * 0.8)) 
                        $('#total_payed').val(Math.round((data.price * calc) * 0.8))
                    }
                    if(calc > 15 ){
                        $("#carprice").html(Math.round((data.price * calc) * 0.7)) 
                        $('#total_payed').val(Math.round((data.price * calc) * 0.7))
                    } 
                };
            });
          });
</script>
       

        <script>
         $(document).ready(function(){
          $("#brandselect").change(function(){
           branid = this.value;
            $.get("/getbycategory?brand_id=" + branid, function(data, status){
                console.log(data);
              $("#carselect").html(data);
            });
          });
        });
        </script>
        
        <script>
            $(document).ready(function(){
             $("#carselect").change(function(){
                id = this.value;
               $.get("/getcar?id=" + id, function(data, status){
                   console.log(data);
                 $("#carcard").html(data);
               });
             });
           });
           </script>
              <script>
                $(document).ready(function(){
                 $("#brandselect").change(function(){
                    newid = this.value;
                   $.get("/getcar?forbrand=" + newid, function(data, status){
                       console.log(data);
                     $("#carcard").html(data);
                   });
                 });
               });
               </script>
<script>
    $(document).scroll(function() {
    checkOffset();
});

function checkOffset() {
    if($('#carcard').offset().top + $('#carcard').height() 
                                           >= $('#end').offset().top)
        $('#carcard').css('opacity', '0');
    if($(document).scrollTop() + window.innerHeight < $('#end').offset().top)
        $('#carcard').css('opacity', '1'); // restore when you scroll up
}
</script>
<script>
    
 
  var audio = document.getElementById("audio");
  audio.crossOrigin = 'anonymous';
  audio.play();

</script>

@endsection
