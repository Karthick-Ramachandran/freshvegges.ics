	@extends('dashboard.layouts.app')

@section('content')
<div class="mt-5 text-center">
        <h3 class="text-center">Number Plate</h3>

</div>
<div class="row mt-5">
    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-6 mb-4">
        <img src="{{ asset('number/frame2-out.jpg') }}" width="300px" height="250px" alt="" srcset="">
    </div>
     <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-6 mb-4">
        <img src="{{ asset('number/frame2.jpg') }}" width="300px" height="250px" alt="" srcset="">
    </div>
     <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-6 mb-4">
        <img src="{{ asset('number/frame26-out.jpg') }}" width="300px" height="250px" alt="" srcset="">
    </div> 
    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-6 mb-4">
        <img src="{{ asset('number/frame26.jpg') }}" width="300px" height="250px" alt="" srcset="">
    </div>
    
</div>

@endsection

