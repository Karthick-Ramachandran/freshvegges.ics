@extends('dashboard.layouts.newlayout')

@section('content')
<div class="card mb-5 mt-5">
    <div class="card-body">
        <h5 class="card-title">Smar Alert Data</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>

                        <th>Alert id</th>
                        <td>Date</td>
                     
                        <th>Image</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($app as $apps)
               <tr>
            <td>{{ $apps->alertid }}</td>
                        <td>{{ $apps->createdon }}</td>
            <?php 
            $str = $apps->alertstoragepath;
            $str = preg_replace("/\/var\/www\/smartalert.nicesolutionsllc.com\//", '', $str);
          
            ?>
            <td><img height="240px" width="240px" src="{{ asset($str) }}" alt="Image not available" onerror="this.src='https://images.pexels.com/photos/262272/pexels-photo-262272.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940';"></td>
            

                </tr>
               @endforeach
                <script>
                
                
                   
                </script>
            </tbody>

                <tfoot>
                        
                        <th>Alert id</th>
                        <td>Date</td>
                       
                        <th>Image</th>
                </tfoot>
            </table>
        </div>

    </div>
</div>

    
@endsection
