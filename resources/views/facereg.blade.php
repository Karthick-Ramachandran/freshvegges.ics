@extends('dashboard.layouts.app')

@section('content')
<div class="mt-5 text-center">
        <h3 class="text-center">Face Recognition</h3>

</div>
<div class="row mt-5">
        
@foreach ($fac as $apps)
 

    <div class="col-lg-6 col-xl-6 col-md-6 col-xs-12 col-sm-12 mb-4">

          <?php 
                        $str = $apps->face1;
                        $str = preg_replace("/\/var\/www\/freshvegges.pics\/public\//", '', $str);
                        ?>
        <img src="{{ asset($str) }}" width="250px" height="250px" alt="" srcset="">
    </div>

        <div class="col-lg-6 col-xl-6 col-md-6 col-xs-12 col-sm-12 mb-4">
   <?php
                  $face2 = $apps->face2;
                        $face2 = preg_replace("/\/var\/www\/freshvegges.pics\/public\//", '', $face2);

 $mime = mime_content_type($face2);
if(strstr($mime, "video/")){
    $out = "video";
}else if(strstr($mime, "image/")){
    $out = "image";
}
                ?>

@if ($out == "image")
                    <img src="{{ asset($face2) }}" width="300px" height="250px" alt="" srcset="">

                    @else

<video width="280" height="240" controls>
                         <source src="{{ asset($face2) }}" type="video/mp4">
                         Your browser does not support the video tag.
                       </video>    
@endif          

 <h4 style="margin-top:10px; margin-left:95px; margin-right:auto;"> {{$apps->output}} </h4>
       
 </div>
<br/>
 
@endforeach



</div>

@endsection


