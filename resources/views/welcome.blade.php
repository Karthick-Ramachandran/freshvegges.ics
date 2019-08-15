
@extends('layouts.index')


@section('content')
<div class="height"> 
<div class=" container">

<div class="">
    <button class="btn btn-primary mt-5">Home</button>
    <button class="btn btn-primary mt-5">About</button>
<button  class="btn btn-primary float-right mt-5" id="1">Login</button>
<button  class="btn btn-primary float-right mt-5" id="2" style="display:none">Login</button>
<button  class="btn btn-primary float-right mt-5" style="display:none" id="3">Login
</button>

</div>
</div>
</div>
        <script>
           document.getElementById('1').addEventListener('click', function(){
           document.getElementById('1').style.display = "none";
           document.getElementById('2').style.display = "inline";
          })
          document.getElementById('2').addEventListener('click', function(){
            document.getElementById('2').style.display = "none";
            document.getElementById('3').style.display = "inline";
           })
           document.getElementById('3').addEventListener('click', function() {
window.location.href = "{{ url('/login') }}"           
});
         </script>
@endsection

           
