@extends('dashboard.layouts.app')

@section('content')
<div class=" text-center">
        <h3 class="text-center">Wanted Pic</h3>

</div>
<div class="row mt-5">
    @foreach ($app as $apps)
         <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-12 mb-4">
        <center>
            <img src="{{ asset($apps->storagepath) }}" width="300px" height="250px" alt="" srcset="">

<?php
$words = $apps->storagepath;

$words = preg_replace('/[0-9]+/', '', $words);
$output = str_replace('wanted/', '', $words);
 ?>
    <h6>{{$output}}</h6>        
</center>
        </div>   
    @endforeach

</div>

@endsection


