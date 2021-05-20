<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/admin.css" />
    <title>Admin</title>
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
                <br><br>
                <form method="/" action="{{ route('vehicle') }}">
                        @csrf
                        <div class="form-group row mb-0" id="vehicle" class="card-action">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn1 blue lighten-1 modal-trigger" class="btn" id="vehicle">
                                    {{ __('VEHICLE') }}
                                </button><br><br>
                            </div>
                        </div>
                    </form>
                    <form method="/" action="{{ route('transaction') }}">
                        @csrf
                        <div class="form-group row mb-0" id="trans" class="card-action">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn1 blue lighten-1 modal-trigger" class="btn" id="trans">
                                    {{ __('TRANSACTION') }}
                                </button><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </form><br><br><br>
                    <form method="/" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row mb-0" id="out" class="card-action">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn1 red lighten-1 modal-trigger" class="btn" id="out">
                                    {{ __('LOGOUT') }}
                                </button><br><br>
                            </div>
                        </div>
                    </form>
               <!-- <li><form method="/" action="{{ route('vehicle') }}">        
                    @csrf       
                    <button type="submit" class="btn1 blue lighten-1 modal-trigger" class="btn" id="parked">{{ __('VEHICLE') }}</button>
                <form></li><br> -->
                <!-- <form method="/" action="{{ route('vehicle') }}">        
                    @csrf       
                    <button type="submit" class="btn1 blue lighten-1 modal-trigger" class="btn" id="parked">{{ __('VEHICLE') }}</button>
                <form><br><br>
                <li><form method="/" action="{{ route('vehicle') }}">        
                    @csrf       
                    <button type="submit" class="btn1 blue lighten-1 modal-trigger" class="btn" id="parked">{{ __('TRANSACTION') }}</button>
                <form></li><br><br><br><br><br><br><br><br><br>
                <li> <form method="/" action="{{ route('login') }}">        
                    @csrf       
                    <button type="submit" class="btn1 blue lighten-1 modal-trigger" class="btn" id="parked">{{ __('LOGOUT') }}</button>
                <form></li> -->
                <!-- <li><a class="waves-effect " method="/"  style="color: white; ">Admin</a></li>
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

<body class="background"></body>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card sizeCard blue lighten-5 ">
                <h3 class="card-header, center">{{ __('Parking Management System') }}</h3>
                <div class="card-image">
                <img class="center" src="{{url('/assets/picsur1.jpg')}}" /><br>
                <div class="card-body">
                    <form method="/" action="{{ route('transaction') }}">
                    
                        @csrf
                        <div class="form-group row mb-0" id="parked" class="card-action">
                            <div class="col-md-8 offset-md-4">
                           
                                <button type="submit" class="btn blue lighten-1 modal-trigger" class="btn" data-target="modal1">
                                    {{ __('Add Vehicle') }}
                                </button>
                                <button type="submit" class="btn blue lighten-1 modal-trigger" class="btn" id="parked">
                                    {{ __('view cars') }}
                                </button><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="container">

                <div id="modal1" class="modal blue lighten-5">
                    <div class="modal-content blue lighten-5">
                        <div class="col s12 m8 9">
                            <label for="custId">Customer #</label>
                            <input id="custId" type="text" disabled placeholder="Customer #" /><br>

                            <label for="vModel">Vehicle Model</label>
                            <input id="vModel" type="text" placeholder="Vehicle Model" /><br>

                            <label for="vMaker">Vehicle Maker</label>
                            <input id="vMaker" type="text" placeholder="Vehicle Maker" /><br>

                            <label for="vPlatenum">Vehicle Plate number</label>
                            <input id="vPlatenum" type="text" placeholder="Vehicle Plate number" /><br>


                            <a class="waves-light btn center "  onclick="add_record()"><i class="material-icons Right"></i>add customer</a>
                            
                            <br>
                            <br>
                        </div>
                    </div>
                </div>

                <br>
                <br>
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