
<html>
<head>
    <script type="text/javascript" src={{ asset("vis-4.21.0/dist/vis.js") }}></script>
    <link href={{ asset("vis-4.21.0/dist/vis.css") }} rel="stylesheet" type="text/css" />

    <style type="text/css">
        #mynetwork {
            width: 1200px;
            height: 800px;
            border: 1px solid rgb(235, 8, 8);
        }
    </style>
</head>
<body>
test
<div id="mynetwork"></div>

<script type="text/javascript">
// /home/karthickaravindan/Documents/Project/network_graph
    var DIR={{ asset("output/") }}
    var DIR_FACE={{ asset("video/video-1/person/") }}

    var JAY_1_DIR={{ asset("output-1/output-1/jay-1/") }}
    var JAY_1_DIR_FACE={{ asset("output-1/video/jay-1/face/") }}

    var JAY_2_DIR={{ asset("output-1/output-1/jay-2/") }}
    // var DIR_FACE="./video/video-1/person/"
    // create an array with nodes
    var nodes = new vis.DataSet([
       



       {id: 0,  shape: 'circularImage', color:'red',label:"VID_20190623_175225 - 10-09-2019",image: DIR + 'missing.png', brokenImage: DIR + 'missingBrokenImage.png'},
       {id: 1,  shape: 'circularImage', image: DIR + 'frame1.jpg'},
        {id: 2,  shape: 'circularImage', image: DIR + 'frame2.jpg'},
        {id: 3,  shape: 'circularImage', image: DIR + 'frame3.jpg'},
        {id: 4,  shape: 'circularImage', image: DIR + 'frame4.jpg'},
        {id: 5,  shape: 'circularImage', image: DIR + 'frame5.jpg'},
        {id: 6,  shape: 'circularImage', image: DIR + 'frame6.jpg'},
        {id: 7,  shape: 'circularImage', image: DIR + 'frame7.jpg'},
        {id: 8,  shape: 'circularImage', image: DIR + 'frame8.jpg'},
        {id: 9,  shape: 'circularImage', image: DIR + 'frame9.jpg'},
        {id: 10, shape: 'circularImage', image: DIR + 'frame10.jpg'},
        {id: 11, shape: 'circularImage', image: DIR + 'frame11.jpg'},
        {id: 12,  shape: 'circularImage', image: DIR + 'frame12.jpg'},
        {id: 13,  shape: 'circularImage', image: DIR + 'frame13.jpg'},
        {id: 14, shape: 'circularImage', image: DIR + 'frame14.jpg'},
        {id: 15, shape: 'circularImage', image: DIR + 'frame15.jpg'},
        {id: 16,  shape: 'circularImage', image: DIR_FACE + '3-0.jpg'},
        {id: 17,  shape: 'circularImage', image: DIR_FACE + '4-0.jpg'},
        {id: 18, shape: 'circularImage', image: DIR_FACE+ '5-0.jpg'},
        {id: 19, shape: 'circularImage', image: DIR_FACE+ '12-0.jpg'},



        {id: 20,  shape: 'circularImage', color:'red',label:"JAY-1 22-07-2019",image: DIR + 'missing.png', brokenImage: DIR + 'missingBrokenImage.png'},
        {id: 21,  shape: 'circularImage', image: JAY_1_DIR + 'frame0.jpg'},
        {id: 22,  shape: 'circularImage', image: JAY_1_DIR + 'frame1.jpg'},
        {id: 23,  shape: 'circularImage', image: JAY_1_DIR + 'frame2.jpg'},
        {id: 24,  shape: 'circularImage', image: JAY_1_DIR + 'frame3.jpg'},
        {id: 25,  shape: 'circularImage', image: JAY_1_DIR + 'frame4.jpg'},
        {id: 26,  shape: 'circularImage', image: JAY_1_DIR + 'frame5.jpg'},
        {id: 27,  shape: 'circularImage', image: JAY_1_DIR + 'frame6.jpg'},
        {id: 28,  shape: 'circularImage', image: JAY_1_DIR_FACE + 'frame-0.jpg'},
        

        {id: 29,  shape: 'circularImage', color:'red',label:"JAY-2 29-07-2019",image: DIR + 'missing.png', brokenImage: DIR + 'missingBrokenImage.png'},
        {id: 30,  shape: 'circularImage', image: JAY_2_DIR + 'frame0.jpg'},
        {id: 31,  shape: 'circularImage', image: JAY_2_DIR + 'frame1.jpg'},
        {id: 32,  shape: 'circularImage', image: JAY_2_DIR + 'frame2.jpg'},
        {id: 33,  shape: 'circularImage', image: JAY_2_DIR + 'frame3.jpg'},
        {id: 34,  shape: 'circularImage', image: JAY_2_DIR + 'frame4.jpg'},
        {id: 35,  shape: 'circularImage', image: JAY_2_DIR + 'frame5.jpg'},
        {id: 36,  shape: 'circularImage', image: JAY_2_DIR + 'frame6.jpg'},
        // {id: 37,  shape: 'circularImage', color:'red', image: JAY_2_DIR + 'frame7.jpg'},
        // {id: 38,  shape: 'circularImage', color:'red', image: JAY_2_DIR + 'frame8.jpg'},
        // {id: 39,  shape: 'circularImage', color:'red', image: JAY_2_DIR + 'frame9.jpg'},
        {id: 37,  shape: 'circularImage', image: JAY_1_DIR_FACE + 'frame-0.jpg'},
        

    ]);

    // create an array with edges
    var edges = new vis.DataSet([
        {from: 0, to: 16},    
        {from: 0, to: 17},
        {from: 0, to: 18},
        {from: 0, to: 19},
        
        {from: 0, to: 1},
        {from: 0, to: 2},
        {from: 0, to: 3},
        {from: 0, to: 4},
        {from: 0, to: 5},
        {from: 0, to: 6},
        {from: 0, to: 7},
        {from: 0, to: 8},
        {from: 0, to: 9},
        {from: 0, to: 10},
        {from: 0, to: 11},
        {from: 0, to: 12},
       

        {from: 0, to: 13},
        {from: 0, to: 14},
        {from: 0, to: 15},


        {from: 3, to: 16},
        {from: 4, to: 17},
        {from: 5, to: 18},

        {from: 12, to: 19},



        {from: 20, to: 21},
        {from: 20, to: 22},
        {from: 20, to: 23},
        {from: 20, to: 24},
        {from: 20, to: 25},
        {from: 20, to: 26},
        {from: 20, to: 27},
        {from: 20, to: 28},
        {from: 27, to: 28},



        {from: 29, to: 31},
        {from: 29, to: 30},
        {from: 29, to: 32},
        {from: 29, to: 33},
        {from: 29, to: 34},
        {from: 29, to: 35},
        {from: 29, to: 36},
        {from: 29, to: 37},
        
        {from: 36, to: 37},

        {from: 28, to: 37},


        // {from: 16, to: 17},
        // {from: 17, to: 18},
        // {from: 18, to: 19},
    ]);

    // create a network
    var container = document.getElementById('mynetwork');

    // provide the data in the vis format
    var data = {
        nodes: nodes,
        edges: edges
    };
    var options = {
 
         interaction:{
        navigationButtons: true,
        keyboard: true
  }
  
};

    // initialize your network!
    var network = new vis.Network(container, data, options);
</script>
</body>
</html>
