@extends('dashboard.layouts.app')

@section('content')
<div class="container">
        <h3 class="text-center">Details and Features</h3>

<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xlg-6">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                <h6 class="text-white"> Total number of users {{ $app->count() }} </h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xlg-6">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                <h6 class="text-white">Total number of Images and videos {{ $get->count() }}</h6>
            </div>
        </div>
    </div>
     <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xlg-6">
        <div class="card card-hover">
            <div class="box bg-warning text-center" onclick="window.location.href='https://66.85.77.82:3002'">
                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                <h6 class="text-white">Posenet</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xlg-6">
        <div class="card card-hover" >
            <div class="box bg-danger text-center" onclick="window.location.href='http://66.85.77.82:3001/face_detection'" >
                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                <h6 class="text-white">Face detection</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
   
    <!-- Column -->
    <!-- Column -->
    
</div>
<div class="row">
        <div class="col-md-12">
           
        </div>
    </div>
</div>
@endsection
