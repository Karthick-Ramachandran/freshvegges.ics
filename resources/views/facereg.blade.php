@extends('dashboard.layouts.app')

@section('content')
<div class="mt-5 text-center">
        <h3 class="text-center">Face Recognition</h3>

</div>
<div class="row mt-5">
        
    <div class="col-lg-6 col-xl-6 col-md-6 col-xs-12 col-sm-12 mb-4">
        <img src="{{ asset('jaypics/IMG_20181223_152851.jpg') }}" width="300px" height="250px" alt="" srcset="">
    </div>
    <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12">
        <video width="300px" height="250px" controls>
            <source src="{{ asset('object/jay-1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
    </div>
</div>

@endsection

