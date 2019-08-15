<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/webcam.js') }}"></script>
    <style>
            #my_camera{
                width: 320px;
                height: 240px;
                border: 1px solid black;
                margin:10px auto;
                }
            
    </style>
    <title>Document</title>
</head>

        <body>
                <div id="my_camera"></div>
              <center>  <input type=button value="Take Snapshot" onclick="take_snapshot()"> </center>
                 
                <div id="results" ></div>


                <script language="JavaScript">
                        Webcam.set({
                         width: 320,
                         height: 240,
                         image_format: 'jpg',
                         jpeg_quality: 90
                        });
                        Webcam.attach( '#my_camera' );
                       
                       function take_snapshot() {
                        
                        // take snapshot and get image data
                        Webcam.snap( function(data_uri) {
                         // display results in page
                         document.getElementById('results').innerHTML = 
                         '<img src="'+data_uri+'"/>';
                         } );
                       }
                       </script>
      
        </body>
    
</body>
</html>