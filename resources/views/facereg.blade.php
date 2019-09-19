@extends('dashboard.layouts.app')

@section('content')
<div class=" text-center">
        <h3 class="text-center">Face Detection</h3>

</div>
<div class="row justify-content-center">        
    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-6 mb-4">
         <img src="{{ asset('gujarat/face/Hafiz Saeed-2.jpg') }}" alt="image" height="240" width="100%">
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-6 mb-4">
         <video width="100%" height="240" controls>
                         <source src="{{ asset('gujarat/face/out.mp4') }}" type="video/mp4">
                         Your browser does not support the video tag.
          </video>
    </div>
</div>
<div class="row justify-content-center  mt-1">

@foreach($app as $apps)
    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-6 mb-4">
        <video width="100%" height="220" controls>
             <source src="{{asset($apps->image)}}" type="video/mp4">
     </video>
    </div>
@endforeach
</div>
@endsection

