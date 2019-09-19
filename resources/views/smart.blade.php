@extends('dashboard.custom')

@section('content')
<div class="card mb-5">
    <div class="card-body">
        <h5 class="card-title">Smar Alert Data</h5>
        <div class="table-responsive">
                <table>
                        <tr>
                                <th>Alert id</th>
                                <td>Date</td>
                        
                                <th>Video</th>
                        </tr>
                        @foreach($app as $apps)
                        <tr>
                     <td>{{ $apps->alertid }}</td>
                                 <td>{{ $apps->createdon }}</td>
                
                     <td><video width="280" height="240" controls>
                        <?php 
                        $str = $apps->alertstoragepath;
                        $str = preg_replace("/\/var\/www\/smartalert.nicesolutionsllc.com\//", '', $str);
                        ?>
                         <source src="{{ asset($str) }}" type="video/mp4">
                         Your browser does not support the video tag.
                       </video> </td>
         
                         </tr>
                        @endforeach                 
                      
                      </table>

                      {{ $app->links() }}
        </div>

    </div>
</div>

    
@endsection
