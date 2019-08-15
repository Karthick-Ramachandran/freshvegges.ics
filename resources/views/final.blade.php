<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final auth</title>
    <style>

.container{
	width:500px;
	display:block;
	margin:50px auto;
}
.progress {
	overflow: hidden;
	height: 20px;
	background-color: #ccc;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
	box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
		margin-bottom: 20px;
}
.progress-bar {
	width: 0;
	height: 100%;
	color: #fff;
	text-align: center;
	background-color: #ee303c;

	
 
}
.progress-striped .progress-bar {
			background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
			background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
			background-size: 40px 40px;
}
.progress.active .progress-bar {
	-webkit-animation: progress-bar-stripes 2s linear infinite;
	animation: progress-bar-stripes 2s linear infinite;
	-moz-animation: progress-bar-stripes 2s linear infinite;
}
    </style>
</head>
<body>
        <div style="margin-top:100px;"></div>
        <center>
        <video style="display:block" id="player" autoplay></video> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <canvas id="canvas" style="display:none" width=320 height=240></canvas>
        <div>
                <div class="container" >    
                         
                            
                            
                        <div id="po" style="display: none" class="progress progress-striped">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span>40% Complete </span>
                          </div>
                           
                        </div>
                        
                        
                        <div id="poo" style="display: none" class="progress progress-striped">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span>80% Complete </span>
                          </div>
                           
                        </div>
                         
                        <div id="pooo" style="display: none" class="progress progress-striped">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                  <span>100% Completed</span>
                                </div>

                                 
                              </div>
                        <center>      <span id="suc" style="color:green; font-weight:bold; display:none;">Success </span> </center>

        </div>
        </div>
        <button style="display:block;"  id="capture">Submit</button>
        </center>
        <script>
          const player = document.getElementById('player');
          const canvas = document.getElementById('canvas');
          const context = canvas.getContext('2d');
          const captureButton = document.getElementById('capture');
        
          const constraints = {
            video: true,
          };
        
          captureButton.addEventListener('click', () => {
              document.getElementById('player').style.display="none";
              document.getElementById('po').style.display="block";

              canvas.style.display='block';
              setTimeout(() => {
                document.getElementById('po').style.display="none";

                document.getElementById('poo').style.display="block";

            },2500);
            setTimeout(() => {
                document.getElementById('poo').style.display="none";

                document.getElementById('pooo').style.display="block";
                document.getElementById('suc').style.display="block";

            },3500);
              setTimeout(() => {
               window.location.href = "{{ url('/admin') }}";
              },5000);
             
            context.drawImage(player, 0, 0, canvas.width, canvas.height);
        
            // Stop all video streams.
            player.srcObject.getVideoTracks().forEach(track => track.stop());
        
            
          });
        
          navigator.mediaDevices.getUserMedia(constraints)
            .then((stream) => {
              // Attach the video stream to the video element and autoplay.
              player.srcObject = stream;
            });
        </script>
    
</body>
</html>