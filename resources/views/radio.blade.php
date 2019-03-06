<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">


    <style>

        body{
            font-family: Roboto;
            background: url("image/concrete_wall_2.png");


        }

        .container{
            text-align: center;
        }

        .container1{
            text-align: center;
        }

        .btn-info{
            color: darkslategray;
            background-color: lightgray;
            border: 2px solid black;
            padding: 10px;
            border-radius: 20px 20px;
            font-family:Roboto;
        }

        #player{
            border-radius: 50px 20px;
            color: aqua;

        }

        #heading{
            text-align: center;
            font-family: Roboto;

        }

        .jumbotron{
           background: url("image/guitar.jpg");
            background-position: initial;
            background-color: black;
            backdrop-filter: opacity(.1);
            background: repeat;

        }

        #heading2{
            text-align: center;

        }

        #btn1{
            text-align: center;

        }

        .modal-body{
            border-radius: 50px 50px;

        }

        .modal-title{

            border-radius: 50px 50px;
        }

        .modal-header{


        }

    </style>



</head>

<body>

<div  class="jumbotron">
    <h1 id="heading" >Jam Radio Player</h1>
    <p id="heading">Just click on one of the links and start listening!</p>
</div>


<div class="container">
    <h2 id="heading2">Radio Stations</h2>
    <!-- Trigger the modal with a button -->
    <button id="btn1" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open List</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Station Select</h4>
                </div>
                <div class="modal-body">
                    <div class="container1">
                        @foreach($listOFStations as $station)
                            <h3>{{$station->genre}}</h3>
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo{{$station->station_id}}">Station</button>
                            <div id="demo{{$station->station_id}}" class="collapse">
                                <br>
                                <br>
                                <audio id="player" controls preload="metadata" style=" width:220px;">
                                    <source src="{{$station->url}}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>







</body>
</html>

