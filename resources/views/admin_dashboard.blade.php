<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: darkgrey;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: black;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            background-color: whitesmoke;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 11px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;

            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>

</head>

<body>
    <div id="mySidenav" class="sidenav">
        <span style="cursor:pointer;" class="closebtn" onclick="closeNav()">&times;</span>
        <a href="#">Course</a>
        <a href="#" id="batch">Batch</a>
        <a href="#">Birthday</a>
        <a href="#">Fees</a>
    </div>

    <div id="main" class="bg-secondary">
        <span style="font-size:25px;cursor:pointer;" onclick="openNav()">&#9776; Angel</span>
        <!-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div> -->
    </div>
<<<<<<< HEAD

    <div class="container-fluid p-0 text-center">
        <!-- student table -->
        <div class="container-fluid p-5 text-center">
            <table class="table table-stripped  text-center">
                <div class="container-fluid p-5">
                    <table class="table table-stripped">
                        <tr class="bg-info">
                            <!-- personal detail -->
                            <th>ID</th>
                            <th>NAME</th>
                            <th>ADRESS</th>
                            <th>CONTACT NO</th>
                            <th>BOD</th>
                            <th>GENDER</th>
                            <th>COURSE</th>
                            <th>FEES</th>
                            <th>DURATION</th>
                            <th>BATCH TIME</th>
                        </tr>
                        @foreach($data as $info)

                        <tr>
                            <td>{{$info->s_id}}</td>
                            <td>{{$info->Full_Name}}</td>
                            <td>{{$info->Address}}</td>
                            <td>{{$info->Contact_No}}</td>
                            <td>{{$info->BOD}}</td>
                            <td>{{$info->gender}}</td>
                            <td>{{$info->Course}}</td>
                            <td>{{$info->Fees}}</td>
                            <td>{{$info->Duration}}</td>
                            <td>{{$info->Batch_Time}}</td>
                        </tr>
                        @endforeach

                    </table>
                </div>
                <!-- course table -->
                <div class="container-fluid p-5">
                    <table class="table table-stripped">
                        <tr class="bg-info">
                            <!-- personal detail -->
                            <th>ID</th>
                            <th>NAME</th>
                            <th>CONTACT NO</th>
                            <th>GENDER</th>
                            <th>COURSE</th>
                            <th colspan="3"></th>
                        </tr>
                        @foreach($data as $info)

                        <tr>
                            <td>{{$info->s_id}}</td>
                            <td>{{$info->Full_Name}}</td>
                            <td>{{$info->Contact_No}}</td>
                            <td>{{$info->gender}}</td>
                            <td>{{$info->Course}}</td>
                            <td><a class="btn btn-warning w-75">More Info</a></td>
                            <td><a class="btn btn-success w-75">Update</a></td>
                            <td><a class="btn btn-danger w-75">Delete</a></td>
                        </tr>
                        @endforeach

                    </table>
                </div>


                <script>
                    function openNav() {
                        document.getElementById("mySidenav").style.width = "250px";
                        document.getElementById("main").style.marginLeft = "250px";
                    }

                    function closeNav() {
                        document.getElementById("mySidenav").style.width = "0";
                        document.getElementById("main").style.marginLeft = "0";
                    }
                </script>
=======
    <div class="container-fluid p-0 text-center">

        <!-- course table -->
        <div class="container-fluid p-5">
            <table class="table table-stripped">
                <tr class="bg-info">
                    <!-- personal detail -->
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CONTACT NO</th>
                    <th>GENDER</th>
                    <th>COURSE</th>
                    <th colspan="3"></th>
                </tr>
                @foreach($data as $info)

                <tr>
                    <td>{{$info->s_id}}</td>
                    <td>{{$info->Full_Name}}</td>
                    <td>{{$info->Contact_No}}</td>
                    <td>{{$info->gender}}</td>
                    <td>{{$info->Course}}</td>
                    <td><a class="btn btn-warning w-75">More Info</a></td>
                    <td><a class="btn btn-success w-75">Update</a></td>
                    <td><a class="btn btn-danger w-75">Delete</a></td>
                </tr>
                @endforeach

            </table>
        </div>


        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
        </script>
>>>>>>> 68595553757158e34d8678b0a8c7802715594803



</body>

</html>