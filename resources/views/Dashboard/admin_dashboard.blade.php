<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('CSS/dashboard.css')}}">

</head>

<body>

    <div id="mySidenav" class="sidenav">
        <span style="cursor:pointer;" class="closebtn" onclick="closeNav()">&times;</span>
        <a href="#">Course</a>
        <a href="#" id="batch">Batch</a>
        <a href="bDay">Birthday</a>
        <a href="#">Fees</a>
    </div>

    <!-- <div id="main" class="bg-dark text-light">
        <span style="font-size:25px;cursor:pointer;" onclick="openNav()">&#9776; Angel</span>
    </div> -->

    <div class="container-fluid p-0 text-center" id="main">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <span style="font-size:25px;cursor:pointer;" class="mr-2" onclick="openNav()">&#9776;</span>
            <img src="{{asset('Images/angel.png')}}" alt="">

            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ml-3 mt-1">
                        <a class="nav-link nav" href="{{ url('/') }}">Home </a>
                    </li>
                </ul>

            </div>
        </nav>

        <!-- student table -->
        <div class="container">
            <table class="table table-stripped  text-center">
                <thead>

                    <tr class="bg-primary text-light">

                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact No.</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Duration</th>
                        <th>More Info</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $info)

                    <tr>
                        <td>{{$info->s_id}}</td>
                        <td>{{$info->Full_Name}}</td>
                        <td>{{$info->Contact_No}}</td>
                        <td>{{$info->gender}}</td>
                        <td>{{$info->Course}}</td>
                        <td>{{$info->Duration}}</td>
                        <!-- Button trigger modal -->

                        <td type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a href="{{ url('student_detail', $info->id)}}" class="btn btn-warning ">More Info</a>
                        </td>
                        <td><a href="{{ url('edit', $info->s_id)}}" class="btn btn-success ">Update</a></td>
                        <td><a href="{{ url('delete', $info->id)}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>