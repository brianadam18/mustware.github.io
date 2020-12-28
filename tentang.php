<?php include_once 'header.php'; ?>
<style type="text/css">
<!-- 
.style3 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Halaman Utama</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
	  <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
   <div class="container text-center">
      <h2>
         Must Ware
      </h2>
     
      <div class="col-md-8 col-md-offset-2">
         <div class="red-border">
            &nbsp;
         </div>
         <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed libero vel ex maximus vulputate nec eu ligula. Vestibulum elementum nisi ut fermentum lobortis. Sed quis iaculis felis. 
         </p>
         <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
      </div>
   </div>
</section>
    	
      		 <div id="map" style="width:100%;height:380px"></div>

    <script>
        function initMap() {
            var mapOptions = {
                zoom: 10,
                center: new google.maps.LatLng(-7.946529,112.6142412),
                mapTypeId: 'roadmap'
            };
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            var Malang = {
                lat: -7.983908,
                lng: 112.621391
            };
            var marker = new google.maps.Marker({
                position: Malang,
                map: map,
               
            });
          
            var contentString = '<h2>Must Ware Store</h2>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiUgfO_EMGmXgf8UtttT-CcnnOlMwEjgw&callback=initMap"></script>
      		<hr>
      	</body>
      </head>

