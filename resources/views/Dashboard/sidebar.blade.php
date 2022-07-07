<div id="mySidenav" class="sidenav">
    <!-- Button trigger modal -->
    <a class="nav-link nav" href="{{ url('/') }}">Home </a>
    <a class="nav-link nav" href="{{ url('/admin_dashboard') }}">Dashboard </a>
    <a href="#">Add Student</a>
    <a type="button" data-toggle="modal" data-target="#exampleModal" data-bs-whatever="@getbootstrap">Add course</a>
    <a href="#" id="batch">Batch</a>
    <a href="{{url('bDay')}}">Birthday</a>
    <a class="nav-link nav" href="{{ url('admin_logout') }}">Logout</a>

</div>