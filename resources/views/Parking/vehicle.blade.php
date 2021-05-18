<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/vehicle.css" />
    <title>Vehicles</title>
</head>

<body>
    <!-- <nav>
        <div class="nav-wrapper" style="background-color:  #5a5ccf; ">
            <ul class="col s10 m8 l3 right">
                <li><a href="http://localhost/parking1/www/loginParking.html ">Logout</a></li>
            </ul>
        </div>
    </nav> -->
    <div class="row">
        <div class="col s2 blue lighten-5">
            <ul id="slide-out" class="sidenav sidenav-fixed" style="width: 350px;background-color:  #5a5ccf; ; ">
                <li>
                    <div class="user-view">
                        <a href="#user"><img class="circle" style="width: 100% ; height: 100%;" src="../assets/parkinglogo.png"></a>

                    </div>
                </li>

                <li>
                    <div class="divider"></div>
                </li>
                <form method="/" action="{{ route('admin') }}">        
                    @csrf       
                    <button type="submit" class="btn blue lighten-1 modal-trigger" class="btn" id="parked">{{ __('ADMIN') }}</button>
                <form>
                <!-- <form method="/" action="{{ route('vehicle') }}">        
                    @csrf       
                    <button type="submit" class="btn blue lighten-1 modal-trigger" class="btn" id="parked">{{ __('VEHICLE') }}</button>
                <form>
                <form method="/" action="{{ route('vehicle') }}">        
                    @csrf       
                    <button type="submit" class="btn blue lighten-1 modal-trigger" class="btn" id="parked">{{ __('TRANSACTION') }}</button>
                <form> -->
                <!-- <li><a class="waves-effect " style="color: white; " href="http://localhost/parking1/www/Admin.html ">Admin</a></li>
                <li> <a class="waves-effect " style="color: white; " href="http://localhost/parking1/www/index.html ">Vehicles parked</a></li>
                <li><a class="waves-effect " style="color: white; center " href=" http://localhost/parking1/www/transaction.html ">Transaction</a></li><br><br><br>
                <br><br><br><br><br><br><br><br><br><br>
                <li><a class="waves-effect " style="color: white; " href=" http://localhost/parking1/www/transaction.html ">Logout</a></li> -->

            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <div class="container">
            </div>
        </div>
        <div class="container" >
        <div class="col s10">
            <div class="row">

            </div>
            <!-- Display all records in a table -->
            <body class="background"></body>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card sizeCard blue lighten-5 ">
                <h3 class="card-header, center">{{ __('Vehicle Records') }}</h3>
                <img class="center" src="{{url('/assets/parkingback.png')}}" /><br>
                <table style="margin-top: 50px;" class="responsive-table" class="highlight">
                <thead>

                    <th>Customer Id</th>
                    <th>Vehicle Plate</th>
                    <th>Vehicle Maker</th>
                    <th>Vehicle Model</th>
                    <th>Action</th>

                </thead>
                <tbody id="records"></tbody>
            </table>
            
        </div>
    </div>
</div>
            <div class="container">

                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="col s12 m8 l9">
                            <label for="custId">Customer #</label>
                            <input id="custId" type="text" disabled placeholder="Customer #" /><br>

                            <br>


                            <label for="vModel">Vehicle Model</label>
                            <input id="vModel" type="text" placeholder="Vehicle Model" /><br>

                            <label for="vMaker">Vehicle Maker</label>
                            <input id="vMaker" type="text" placeholder="Vehicle Maker" /><br>

                            <label for="vPlatenum">Vehicle Plate number</label>
                            <input id="vPlatenum" type="text" placeholder="Vehicle Plate number" /><br>


                            <a class="waves-light btn " onclick="edit_record()"> <i class="material-icons Right">edit</i>edit</a>
                        </div>
                    </div>
                </div>

                <br>
                <br>
            </div>
        </div>
    </div>
</div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/scripts.js">
    </script>
</body>

</html>