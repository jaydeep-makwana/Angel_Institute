<nav class="navbar navbar-expand-lg navbar-light bg-light">
     <img src="{{asset('Images/angel.png')}}" height="50" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('admission_form')}}">Add Student</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('signup')}}">Sign up</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('login')}}">Sign in</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('admin_dashboard')}}">Dashboard</a>
            </li>
        </ul>
    </div>
</nav>