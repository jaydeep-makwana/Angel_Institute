<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today's Birthday</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('CSS/dashboard.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body>

    @include('sidebar')

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ml-3 mt-1">
                        <a class="nav-link nav" href="{{ url('/') }}">Home </a>
                    </li>
                </ul>

            </div>
        </nav>

        <div class="container mt-5">

            @if(count($birthdays) != 0)
            @foreach($birthdays as $student)
            <div class="alert alert-success" role="alert">
              <h3>Today is <span class="text-success">{{$student->Full_Name}}'s</span> Birthday </h3>  
            </div>
            @endforeach
            @else
            <div class="alert alert-warning" role="alert">
                Today is not a student's birthday
            </div>
            @endif

        </div>
    </div>
</body>

</html>