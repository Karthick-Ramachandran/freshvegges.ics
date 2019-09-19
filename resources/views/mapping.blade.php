@extends('dashboard.layouts.app')


@section('content')
<div class="" id="mynetwork"></div>

         <script type="text/javascript">
// /home/karthickaravindan/Documents/Project/network_graph
    var DIR="{{ asset('mapping_profiling/output/')}}"
    var DIR_FACE="{{ asset('mapping_profiling/video-1/person/') }}"

    var JAY_1_DIR="{{ asset('mapping_profiling/output-1/output-1/jay-1/') }}"
    var JAY_1_DIR_FACE="{{ asset('mapping_profiling/output-1/video/jay-1/face/') }}"

    var JAY_2_DIR="{{ asset('mapping_profiling/output-1/output-1/jay-2/') }}"
    var JAY_2_DIR_FACE="{{ asset('mapping_profiling/output-1/video/jay-2/face/') }}"
    // var DIR_FACE="./video/video-1/person/"
    // create an array with nodes
    var nodes = new vis.DataSet([
       



       {id: 0,  shape: 'circularImage', color:'red',label:"VID_20190623_175225 - 10-09-2019",image: DIR + 'missing.png', brokenImage: DIR + '/missingBrokenImage.png'},
       {id: 1,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame1.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage',  image: DIR + '/frame1.jpg'},
        {id: 2,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame2.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR + '/frame2.jpg'},
        {id: 3,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame3.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR + '/frame3.jpg'},
        {id: 4,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame4.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR + '/frame4.jpg'},
        {id: 5,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame5.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR + '/frame5.jpg'},
        {id: 6,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame6.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR + '/frame6.jpg'},
        {id: 7,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame7.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR + '/frame7.jpg'},
        {id: 8,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame8.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR + '/frame8.jpg'},
        {id: 9,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame9.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR + '/frame9.jpg'},
        {id: 10,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame10.jpg'+'" height="400" width="400"></img>', shape: 'circularImage', image: DIR + '/frame10.jpg'},
        {id: 11,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame11.jpg'+'" height="400" width="400"></img>', shape: 'circularImage', image: DIR + '/frame11.jpg'},
        {id: 12,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame12.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR + '/frame12.jpg'},
        {id: 13,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame13.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR + '/frame13.jpg'},
        {id: 14,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame14.jpg'+'" height="400" width="400"></img>', shape: 'circularImage', image: DIR + '/frame14.jpg'},
        {id: 15,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR + '/frame15.jpg'+'" height="400" width="400"></img>', shape: 'circularImage', image: DIR + '/frame15.jpg'},
        {id: 16,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR_FACE + '/3-0.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR_FACE + '/3-0.jpg'},
        {id: 17,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR_FACE + '/4-0.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: DIR_FACE + '/4-0.jpg'},
        {id: 18,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR_FACE + '/5-0.jpg'+'" height="400" width="400"></img>', shape: 'circularImage', image: DIR_FACE+ '/5-0.jpg'},
        {id: 19,title: 'VID_20190623_175225 - 10-09-2019 <br><br><img src="'+ DIR_FACE + '/12-0.jpg'+'" height="400" width="400"></img>', shape: 'circularImage', image: DIR_FACE+ '/12-0.jpg'},



        {id: 20,  shape: 'circularImage', color:'red',label:"JAY-1 22-07-2019",image: DIR + 'missing.png', brokenImage: DIR + '/missingBrokenImage.png'},
        {id: 21,title: 'JAY-1 22-07-2019 <br><br><img src="'+ JAY_1_DIR + '/frame0.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_1_DIR + '/frame0.jpg'},
        {id: 22,title: 'JAY-1 22-07-2019 <br><br><img src="'+ JAY_1_DIR + '/frame1.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_1_DIR + '/frame1.jpg'},
        {id: 23,title: 'JAY-1 22-07-2019 <br><br><img src="'+ JAY_1_DIR + '/frame2.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_1_DIR + '/frame2.jpg'},
        {id: 24,title: 'JAY-1 22-07-2019 <br><br><img src="'+ JAY_1_DIR + '/frame3.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_1_DIR + '/frame3.jpg'},
        {id: 25,title: 'JAY-1 22-07-2019 <br><br><img src="'+ JAY_1_DIR + '/frame4.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_1_DIR + '/frame4.jpg'},
        {id: 26,title: 'JAY-1 22-07-2019 <br><br><img src="'+ JAY_1_DIR + '/frame5.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_1_DIR + '/frame5.jpg'},
        {id: 27,title: 'JAY-1 22-07-2019 <br><br><img src="'+ JAY_1_DIR + '/frame6.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_1_DIR + '/frame6.jpg'},
        {id: 28,title: 'JAY-1 22-07-2019 <br><br><img src="'+ JAY_1_DIR_FACE + '/frame-0.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_1_DIR_FACE + '/frame-0.jpg'},
        

        {id: 29,  shape: 'circularImage', color:'red',label:"JAY-2 29-07-2019",image: DIR + '/missing.png', brokenImage: DIR + 'missingBrokenImage.png'},
        {id: 30,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame0.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame0.jpg'},
        {id: 31,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame1.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame1.jpg'},
        {id: 32,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame2.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame2.jpg'},
        {id: 33,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame3.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame3.jpg'},
        {id: 34,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame4.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame4.jpg'},
        {id: 35,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame5.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame5.jpg'},
        {id: 36,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame6.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame6.jpg'},
        {id: 38,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame7.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage',  image: JAY_2_DIR + '/frame7.jpg'},
        {id: 39,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame8.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage',  image: JAY_2_DIR + '/frame8.jpg'},
        {id: 40,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame9.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage',  image: JAY_2_DIR + '/frame9.jpg'},

        {id: 41,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame10.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage',  image: JAY_2_DIR + '/frame10.jpg'},
        {id: 42,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame11.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage',  image: JAY_2_DIR + '/frame11.jpg'},
        {id: 43,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame12.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage',  image: JAY_2_DIR + '/frame12.jpg'},

        {id: 44,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame30.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage',  image: JAY_2_DIR + '/frame30.jpg'},
        {id: 45,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame31.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage',  image: JAY_2_DIR + '/frame31.jpg'},
        {id: 46,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame32.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage',  image: JAY_2_DIR + '/frame32.jpg'},
        {id: 47,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame33.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame33.jpg'},
        {id: 48,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame34.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame34.jpg'},
        {id: 49,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame35.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame35.jpg'},
        {id: 50,title: 'JAY-2 29-07-2019 <br><br><img src="'+ JAY_2_DIR + '/frame36.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_2_DIR + '/frame36.jpg'},

        {id: 37,title: 'JAY-1 22-07-2019 <br><br><img src="'+ JAY_1_DIR_FACE + '/frame-0.jpg'+'" height="400" width="400"></img>',  shape: 'circularImage', image: JAY_1_DIR_FACE + '/frame-0.jpg'},
        

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
        {from: 29, to: 38},
        {from: 29, to: 39},
        {from: 29, to: 40},

        {from: 29, to: 41},
        {from: 29, to: 42},
        {from: 29, to: 43},
        {from: 29, to: 44},
        {from: 29, to: 45},
        {from: 29, to: 46},
        {from: 29, to: 47},
        {from: 29, to: 48},
        {from: 29, to: 49},
        {from: 29, to: 50},

        {from: 46, to: 37},

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
        keyboard: true,
        hover:true
        // ,
        // tooltipDelay: 3600000 
  }
  
  };

    // initialize your network!
    var network = new vis.Network(container, data, options);
    network.on("click", function (params) {
        console.log(params);
    // your element, edge or node
    // set the popup position by getting the params.pointer attr
    // handle the toggle behavior  
});
   </script>

@endsection
