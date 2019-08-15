@extends('dashboard.layouts.newlayout')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Click the images to see the Annotated part or to annotate</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>

                        <th>Image</th>
                        <th>Annotated Text</th>
                        <td>Co-ordinates</td>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
               @foreach ($images as $img)
               <tr>
                <td><img src="{{ asset($img->image) }}"  onClick="reply_click(this.id)" style="height:300px; width:300px;" id="{{ $img->id }}" alt="" srcset="">
                  <td>{{$img->text}}</td>
                    <td> X: &nbsp;{{ $img->x }} <br/>
                    Y: &nbsp; {{ $img->y}}
                    <br/>

                    Height: &nbsp; {{$img->height}} <br/>
                    Width: &nbsp; {{$img->width}} </td>
                    <td>                 {{  Carbon\Carbon::parse($img->created_at)->format('d-M-y')}}
                        </td>
                </td>
                </tr>
               
                <script>
                
                
                   
                </script>
               @endforeach
            </tbody>

                <tfoot>
                        <th>Image</th>
                                                <th>Annotated Text</th>

                        <td>Co-ordinates</td>
                        <th>Date</th>
                </tfoot>
            </table>
        </div>

    </div>
</div>

            <script>
           var text;
           var x;
           var y;
           var width;
           var height;
            function reply_click(clicked_id)
            {

                anno.makeAnnotatable(document.getElementById(clicked_id));
                        
                anno.addHandler('onAnnotationCreated', function(annotation) {
             var data = {
                 x: annotation.shapes[0].geometry.x,
                 y:annotation.shapes[0].geometry.y,
                 height: annotation.shapes[0].geometry.height,
                 width: annotation.shapes[0].geometry.width
             }
            axios.post(`/api/save/${clicked_id}`, {
                x: annotation.shapes[0].geometry.x,
                y: annotation.shapes[0].geometry.y,
                height: annotation.shapes[0].geometry.height,
                width: annotation.shapes[0].geometry.width,
                text: annotation.text
            })
            .then(function (response) {
               console.log(response);
             })
             .catch(function (error) {
               console.log(error);
             });
                   console.log(annotation.shapes[0].geometry);
                });

                axios.get(`/api/save/${clicked_id}`)
                .then((res) => {
                    var myAnnotation = {
                        src : document.getElementById(clicked_id).src,
                       
                        text : res.data.text,
                       
                        shapes : [{
                          type : 'rect',
                          
                          geometry : { x : Number(res.data.x), y: Number(res.data.y), width : Number(res.data.width), height: Number(res.data.height) }
                      
                          
                        }]
                      
                    };
                    anno.addAnnotation(myAnnotation);

                })
          
            }
       </script>

@endsection
