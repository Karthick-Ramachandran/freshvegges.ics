	@extends('dashboard.layouts.app')

@section('content')
<div class="mt-5 text-center">
        <h3 class="text-center">Number Plate</h3>

</div>
<div class="row mt-5">
    @foreach ($obj as $apps)
        
    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-6 mb-4">
         <video width="280" height="240" controls>
                        <?php 
                        $str = $apps->objectdetection;
                        $str = preg_replace("/\/var\/www\/freshvegges.pics\/public\//", '', $str);
                        ?>
                         <source src="{{ asset($str) }}" type="video/mp4">
                         Your browser does not support the video tag.
                       </video>
    </div>
         @endforeach

    
</div>

@endsection


