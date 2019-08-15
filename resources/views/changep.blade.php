@extends('dashboard.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-8 xl-8">
            @if(Session::has('success'))
            <div class="mt-4 alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @if ( count( $errors ) > 0 )
            @foreach ($errors->all() as $error)
            <div class="mt-4 alert alert-danger">{{ $error}} </div>
        @endforeach
            
        @endif
<div class="card">
        <div class="card-body">
            <h5 class="card-title">Change Password</h5>
            <form action="{{ route('change') }}" method="POST">

                {{ csrf_field() }}
            <div class="form-group row">
       <input type="text" name="password" class="form-control" placeholder=" Change Password">

            </div>
            <div class="form-group row">

            <input type="text" name="password2" class="form-control" placeholder=" Change Password 2 (if needed)">
            </div>
<center>
            <input type="submit" value="Submit" class="btn btn-primary">
</center>
            </form>
        </div>
</div>
        
    </div>
</div>

@endsection