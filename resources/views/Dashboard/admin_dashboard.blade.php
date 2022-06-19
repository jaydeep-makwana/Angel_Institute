<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('CSS/dashboard.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>

    <div id="mySidenav" class="sidenav">
        <span style="cursor:pointer;" class="closebtn" onclick="closeNav()">&times;</span>
        <!-- Button trigger modal -->
        <a type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add course</a>
        <a href="#" id="batch">Batch</a>
        <a href="{{url('bDay')}}">Birthday</a>
        <a href="#">Course Payment</a>
        <a class="nav-link nav" href="{{ url('/') }}">Home </a>
        <a class="nav-link nav" href="{{ url('/admin_dashboard') }}">Dashboard </a>
        <a class="nav-link nav" href="{{ url('admin_logout') }}">Logout</a>

    </div>

    <!-- <div id="main" class="bg-dark text-light">
        <span style="font-size:25px;cursor:pointer;" onclick="openNav()">&#9776; Angel</span>
    </div> -->

    <div class="container-fluid p-0 text-center" id="main">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <span style="font-size:25px;cursor:pointer;" class="mr-2" onclick="openNav()">&#9776;</span>
            <img src="{{asset('Images/angel.png')}}" alt="">


            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ml-2 mt-1">
                        <a class="nav-link nav" href="{{ url('admin_logout') }}">Logout</a>
                    </li>
                </ul>

            </div> -->

        </nav>

        <!-- student table -->
        <div class="container p-5 justify-content-center">
            <table class="table  text-center table-responsive">
                <thead>
                    <tr class="text-light" style="background-color:darkslategrey ;">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Contact No.</th>
                        <th>Duration</th>
                        <th>View</th>
                        <th>Fees Pay</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $info)

                    <tr>
                        <td>{{$info->s_id}}</td>
                        <td>{{$info->Full_Name}}</td>
                        <td>{{$info->gender}}</td>
                        <td>{{$info->Course}}</td>
                        <td>{{$info->Contact_No}}</td>
                        <td>{{$info->Duration}}</td>
                        <!-- Button trigger modal -->

                        <td>
                            <a href="{{ url('student_detail', $info->s_id)}}" class="btn text-light" style="background-color:darkcyan;">View</a>
                        </td>
                        <td><a href="#" class="btn text-light" style="background-color:lightcoral">Fees</a></td>
                        <td><a href="{{ url('edit', $info->s_id)}}" ><h5><i class="fa-solid fa-pen-to-square text-success"></i></h5></a></td>
                        <td><a href="{{ url('delete', $info->s_id)}}" ><h5><i class="fa-solid fa-trash-can text-danger"></i></h5></a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_course" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="courseName" class="col-form-label">Course Name:</label>
                            <input type="text" class="form-control" id="courseName" name="courseName">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        {{$data->links()}}
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</body>

</html>