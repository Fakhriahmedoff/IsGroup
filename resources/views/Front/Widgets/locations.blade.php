

@foreach ($locations as $location)
@php
if(Request::input('location_id'))
{
$location_id = Request::input('location_id');
}else{
  $location_id = 1;
}
$var = $location->getCoordinates();
$variki = $var[0];
$variki['lat'];
@endphp
<div data-lng="{{$variki['lng']}}" data-lat="{{$variki['lat']}}" class="location-card">
    <img src="/front/images/locationicon.png" alt="">
    <p class="text">
        {{$location->getTranslatedAttribute('name',App::GetLocale(), 'en')}}
    </p>
  
   
</div>
<script>
 const uluru{{$location->id}} = { lat:{{$variki['lat']}} , lng: {{$variki['lng']}}  };
</script>
@endforeach
<script>
    // Initialize and add the map
  function initMap() {
    // The location of Uluru
     
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: uluru{{$location_id}},
    });
    // The map, centered at Uluru
   
  
          $.get("/getlocations", function(data, status){
                  console.log(data.coordinat)
              });
    // The marker, positioned at Uluru
   
  const image =
    "http://ramrent.az/front/images/carrent.png";
    const marker = new google.maps.Marker({
      position: uluru1,
      map: map,
      icon: image,
    });
    const marker2 = new google.maps.Marker({
      position: uluru2,
      map: map,
      icon: image,
    });
    const marker3 = new google.maps.Marker({
      position: uluru3,
      map: map,
      icon: image,
    });
    const marker4 = new google.maps.Marker({
      position: uluru4,
      map: map,
      icon: image,
    });
    const marker5 = new google.maps.Marker({
      position: uluru5,
      map: map,
      icon: image,
    });
    const marker6 = new google.maps.Marker({
      position: uluru6,
      map: map,
      icon: image,
    });
  
   
  }
  </script>
  