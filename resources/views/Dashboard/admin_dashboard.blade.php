<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('CSS/dashboard.css')}}">

</head>

<body>
    @include('sidebar')
    <!-- add course form -->

<<<<<<< HEAD
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="add_course" method="POST">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="course-name" class="col-form-label">Course Name:</label>
                                <input type="text" class="form-control" id="course-name" name="courseName">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
=======
    <div id="mySidenav" class="sidenav">
        <span style="cursor:pointer;" class="closebtn" onclick="closeNav()">&times;</span>
        <a href="#">Course</a>
        <a href="#" id="batch">Batch</a>
        <a href="{{url('bDay')}}">Birthday</a>
        <a href="#">Fees</a>
        <a class="nav-link nav" href="{{ url('/') }}">Home </a>
        <a class="nav-link nav" href="{{ url('/admin_dashboard') }}">Dashboard </a>
>>>>>>> 3228b508b8a3196dd5c136e0102808e51ac8e1d1
    </div>

    <!-- <div id="main" class="bg-dark text-light">
        <span style="font-size:25px;cursor:pointer;" onclick="openNav()">&#9776; Angel</span>
    </div> -->


<<<<<<< HEAD
    <!-- student table -->
    <div class="container">
        <table class="table  text-center table-responsive">
            <thead>
                <tr class="bg-primary text-light">
=======
            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ml-2 mt-1">
                        <a class="nav-link nav" href="{{ url('/') }}">Home </a>
                    </li>
                    <li class="nav-item active ml-2 mt-1">
                        <a class="nav-link nav" href="{{ url('admin_logout') }}">Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
>>>>>>> 3228b508b8a3196dd5c136e0102808e51ac8e1d1

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
                        <a href="{{ url('student_detail', $info->s_id)}}" class="btn btn-warning ">More Info</a>
                    </td>
                    <td><a href="{{ url('edit', $info->s_id)}}" class="btn btn-success ">Update</a></td>
                    <td><a href="{{ url('delete', $info->s_id)}}" class="btn btn-danger">Delete</a></td>

<<<<<<< HEAD
                </tr>
                @endforeach
            </tbody>
        </table>
=======
                        <td type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a href="{{ url('student_detail', $info->id)}}" class="btn btn-warning text-light">More Info</a>
                        </td>
                        <td><a href="{{ url('edit', $info->id)}}" class="btn btn-success">Update</a></td>
                        <td><a href="{{ url('delete', $info->id)}}" class="btn btn-danger">Delete</a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
>>>>>>> 3228b508b8a3196dd5c136e0102808e51ac8e1d1
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>