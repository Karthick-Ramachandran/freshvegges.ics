@extends('dashboard.layouts.app')

@section('content')

<div class="row mt-5">
    <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12 mb-4">
<center>
        <video width="380" height="340" autoplay controls>
            <source src="{{ asset('object/jay-1.mp4') }}">
            Your browser does not support the video tag.
          </video>
</center>  
  </div>
    <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12 mb-4">
<center>        
<video width="380" height="340" controls>
            <source src="{{ asset('object/jay-2.mp4') }}">
            Your browser does not support the video tag.
          </video>
</center>    
</div>
    <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12 mb-4">
<center>        
<video width="380" height="340" controls>
            <source src="{{ asset('object/VID_20190623_174215.mp4') }}">
            Your browser does not support the video tag.
          </video>
</center>    
</div>

    <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12 mb-4">
<center>        
<video width="380" height="340" controls>
            <source src="{{ asset('object/VID_20190623_175225.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
</center>    
</div>
    <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12 mb-4">
<center>        
<video width="380" height="340" controls>
            <source src="{{ asset('object/VID_20190623_175258.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
</center>    
</div>
    <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12 mb-4">
<center>        
<video width="380" height="340" controls>
            <source src="{{ asset('object/VID_20190623_175320.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
</center>    
</div>
    <div class="col-lg-6 col-xl-6 col-sm-12 col-xs-12 mb-4">
<center>        
<video width="380" height="340" controls>
            <source src="{{ asset('object/airport_output.avi') }}">
            Your browser does not support the video tag.
          </video>
</center>    
</div>
</div>

@endsection

