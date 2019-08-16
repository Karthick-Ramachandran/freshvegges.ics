@extends('dashboard.layouts.app')

@section('content')
<div class="row mt-3">
	<div class="col-lg-8">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			  <span class="input-group-text" id="basic-addon1">Id</span>
			</div>
			<input type="text" class="form-control" placeholder="Type in user id" aria-label="Username" aria-describedby="basic-addon1">
		 </div>
	</div>
	<div class="col-lg-8">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			  <span class="input-group-text" id="basic-addon1">Choose Date</span>
			</div>
			<input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
			&nbsp;	&nbsp;<button type="button" id="makes"class="btn btn-danger">Get Data</button>
		 </div>
	</div>
</div>

<div class="mt-5">
		<div id="map" class="map"></div>
	</div>
  


	<script>
            var map = L.map('map');
    
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}{r}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
    
    L.Routing.control({
        waypoints: [
            L.latLng(57.74, 11.94),
            L.latLng(57.6792, 11.949)
        ],
        routeWhileDragging: true
    }).addTo(map);
    
       </script>
@endsection


