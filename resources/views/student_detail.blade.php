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
        <a class="nav-link nav" href="{{ url('/') }}">Home </a>
        <a class="nav-link nav" href="{{ url('/admin_dashboard') }}">Dashboard </a>
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

           
        </nav>
        @foreach($student as $info)
        @endforeach

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-3">
                    <h1>Student Detail</h1>
                </div>
                <div class="col-9 mt-2">
                    <hr style="height:1%;" class="bg-light">
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light mt-1">
            <div class="row align-items-center border border-dark">
                <div class="col-3">
                    <h3>{{$info->Full_Name}}</h3>
                </div>
                <div class="col-9 text-left  border border-start-0 ">
                    <div class="row justify-content-around space">
                        <div class="col-4">
                             <span class="text-secondary">Gender : <span class="bg-white">{{$info->gender}}</span></span>

                        </div>
                        <div class="col-4">
                             <span class="text-secondary">Contact : <span class="bg-white">{{$info->Contact_No}}</span></span>

                        </div>
                        <div class="col-4">
                             <span class="text-secondary">DOB : <span class="bg-white">{{$info->BOD}}</span></span>

                        </div>
                    </div>
                    <div class="row justify-content-around space">
                        <div class="col-4">
                             <span class="text-secondary">Qualification : <span class="bg-white">{{$info->Qualification}}</span></span>

                        </div>
                        <div class="col-4">
                             <span class="text-secondary">Occupation : <span class="bg-white">{{$info->Counselling_By}}</span></span>

                        </div>
                        <div class="col-4">
                            <span class="text-secondary">Counselling By : <span class="bg-white">{{$info->Address}}</span></span>

                        </div>

                    </div>
                    <div class="row space">

                        <div class="col-4">
                        <span class="text-secondary">Cast : <span class="bg-white">{{$info->cast}}</span></span>

                        </div>
                        <div class="col-8 ">
                            <span class="text-secondary">Address : <span class="bg-white">{{$info->Address}}</span></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- course detail -->
        <div class="container-fluid bg-light mt-3">
            <div class="row align-items-center border border-dark">
                <div class="col-3">
                    <h3>Course Detail</h3>
                </div>
                <div class="col-9 text-left border border-start-0 ">
                    <div class="row justify-content-around space ">
                        <div class="col-4">
                             <span class="text-secondary">Course : <span class="bg-white">{{$info->Course}}</span></span>

                        </div>
                        <div class="col-4">
                             <span class="text-secondary">Duration : <span class="bg-white">{{$info->Duration}}</span></span>

                        </div>
                        <div class="col-4">
                             <span class="text-secondary">Batch Time : <span class="bg-white">{{$info->Batch_Time}}</span></span>

                        </div>
                    </div>
                    <div class="row justify-content-around space">
                        <div class="col-4">
                             <span class="text-secondary">Fees : <span class="bg-white">{{$info->Fees}}</span></span>

                        </div>
                        <div class="col-4">
                             <span class="text-secondary">Discount : <span class="bg-white">{{$info->Discount}}</span></span>

                        </div>
                        <div class="col-4">
                            <span class="text-secondary">Authorisation : <span class="bg-white">{{$info->Authorisation}}</span></span>

                        </div>

                    </div>
                    <div class="row space">

                        <div class="col-4">
                        <span class="text-secondary">Net Fees : <span class="bg-white">{{$info->Net_Fees}}</span></span>

                        </div>
                        <div class="col-4">
                            <span class="text-secondary">Discount Offer : <span class="bg-white">{{$info->Discount_Offer}}</span></span>

                        </div>
                        <div class="col-4">
                            <span class="text-secondary">Join Date : <span class="bg-white">{{$info->Join_Date}}</span></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Parents detail -->
         <div class="container-fluid bg-light mt-3">
            <div class="row align-items-center border border-dark ">
                <div class="col-3">
                    <h3>Parents Detail</h3>
                </div>
                <div class="col-9 text-left border border-start-0 ">
                    <div class="row justify-content-around space">
                        <div class="col-4">
                             <span class="text-secondary">Parent Name : <span class="bg-white">{{$info->parent_Name}}</span></span>

                        </div>
                        <div class="col-4">
                             <span class="text-secondary">Parent Contact : <span class="bg-white">{{$info->parent_Contact}}</span></span>

                        </div>
                        <div class="col-4">
                             <span class="text-secondary">Parent Occupation : <span class="bg-white">{{$info->parent_Occupation}}</span></span>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container-fluid p-5"></div>
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