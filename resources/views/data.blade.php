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
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
               @foreach ($images as $img)
               <tr>
<?php
if(file_exists($img->image)){
 $mime = mime_content_type($img->image);
if(strstr($mime, "video/")){
    $data = "video";
}else if(strstr($mime, "image/")){
    $data = "image";

}
}
else {
$data = "1";
}
?>
@if($data =="image")
                <td><img src="{{ asset($img->image) }}" onmouseover="idv = this.id" onclick="reply_click()" style="height:300px; width:300px;" id="{{ $img->id }}" alt="" srcset="">
@endif
@if($data == "video")
<td><video width="300px" height="300px" controls>
            <source src="{{ asset($img->image) }}" type="video/mp4">
            Your browser does not support the video tag.
          </video></td>

@endif                
@if($data =="1") 
<td>Content deleted from server</td>
        @endif           
                    <td>                 {{  Carbon\Carbon::parse($img->created_at)->format('d-M-y')}}
                        </td>
                </td>
                </tr>
               @endforeach
            </tbody>

                <tfoot>
                        <th>Image</th>
                                              

                       
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
           var idv;
            function reply_click()
            {
                anno.makeAnnotatable(document.getElementById(idv));
                        
                anno.addHandler('onAnnotationCreated', function(annotation) {
             var data = {
                 x: annotation.shapes[0].geometry.x,
                 y:annotation.shapes[0].geometry.y,
                 height: annotation.shapes[0].geometry.height,
                 width: annotation.shapes[0].geometry.width
             }
            axios.post(`/api/save/${idv}`, {
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

                axios.get(`/api/save/${idv}`)
                .then((res) => {
                    var myAnnotation = {
                        src : document.getElementById(idv).src,
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

