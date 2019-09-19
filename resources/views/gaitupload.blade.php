@extends('dashboard.layouts.app')

@section('content')

<div class="">
    <div class="row">
  <div class="col-xl-5 col-lg-5 col-xs-8 col-sm-8">
    @if(Session::has('failed'))
           <div class="alert alert-danger"> {{ Session::get('failed') }}</div>
  @endif
  @if(Session::has('success'))
           <div class="alert alert-success"> {{ Session::get('success') }}</div>
  @endif
    <h3>Upload Image or Video</h3>
<form action="{{ route('GaitUpload') }}" method="POST" class="mt-4" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="custom-file">
        <input type="file" name="data[]" class="custom-file-input" id="customFile" multiple>
        <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
      <center>
      <input type="submit"  value="Upload" id="btn"  class="mt-3 btn btn-primary">
      </center>
</form>
</div>
    </div>
</div>

@endsection



