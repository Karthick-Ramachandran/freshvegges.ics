@extends('dashboard.layouts.map')

@section('content')
 <div class="row">
	<div class="col-lg-8">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			  <span class="input-group-text" id="basic-addon1">Id</span>
			</div>
			<input type="text" value="966FEFD7-3814-493D-A05E-2023FCEE3DB7" id="alertid" class="form-control" placeholder="Type in user id" aria-label="Username" aria-describedby="basic-addon1">
		 </div>
		 <div class="input-group mb-3">
			<div class="input-group-prepend">
			  <span class="input-group-text" value="Born" id="basic-addon1">First Name</span>
			</div>
			<input type="text" class="form-control" value="Born" placeholder="Type first name" aria-label="Username" aria-describedby="basic-addon1">
		 </div><div class="input-group mb-3">
			<div class="input-group-prepend">
			  <span class="input-group-text" id="basic-addon1">Last Name</span>
			</div>
			<input type="text" class="form-control" value="Ronin"  placeholder="Type secondname" aria-label="Username" aria-describedby="basic-addon1">
		 </div>
	</div>
	<div class="col-lg-8">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			  <span class="input-group-text" id="basic-addon1">Choose Date</span>
			</div>
			<input type="date" class="form-control" value="2019/03/09"  aria-label="Username" aria-describedby="basic-addon1">
			&nbsp;	&nbsp;<button type="button" onclick="get_data()" id="makes"class="btn btn-danger">Get Data</button>
		 </div>
	</div>
</div>
<div style="width:70vw;">

    <div id="mapid"></div>
</div>
</body>

<script>

var mymap = L.map('mapid').setView([20.5937,78.9629],5);   

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
  maxZoom: 18,
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  id: 'mapbox.streets'
}).addTo(mymap);

// $(document).ready(function() {
//     // page is fully loaded, including all frames, objects and images
//     alert("window is loaded");
// });

function get_data()


{
console.log("Sucess");
let alertid=document.getElementById("alertid").value;

console.log(alertid);
data={"alertid":alertid}
    // JSON response
    return fetch(`/loc/${alertid}`, {
            method: 'get',
            // body:JSON.stringify('{"alertid":alertid,"date":date}')
            headers:{
                      'Content-Type': 'application/json',
                      'body':JSON.stringify(data)

                    }

        })
        .then(res => {
            return res.json()
          })
        .then((response) => {
            console.log('res: ' + JSON.stringify(response))
            columns=response
            result=[];

            for(var i=0; i<columns.length; i++){
               console.log("Latitude: "+columns[i]["lat"]);
              console.log("logititude: "+columns[i]["lon"]);
              result.push([columns[i]["lat"],columns[i]["lon"]])
            }

            console.log(result)

         
         var polyline = L.polyline(result,{color: 'red', weight: '3',  dashArray: '20, 20', dashOffset: '0'}).addTo(mymap);




          polyline.setStyle({
            color: 'red'
          });


          var greenIcon = new L.Icon({
            iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
          });
          
          for (var i=0; i<result.length; i++) {
              
              var lat = result[i][0];
              var log = result[i][1];
              var popupText ="test";// markers[i][2];
              
                var markerLocation = new L.LatLng(lat, log);
                var marker = new L.Marker(markerLocation, {icon: greenIcon});
                mymap.addLayer(marker);
            
                marker.bindPopup(popupText);
            }
        });
}







</script>
@endsection


