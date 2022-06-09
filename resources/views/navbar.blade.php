<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <style>
        .img{
            display: flex;
            flex-direction: row-reverse;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-dark">
        <img src="images/logow.png" alt="" height="60px" width="200px">
        <ul class="nav jastify-content-end">
            <li class="nav-item"><a href="/" class="nav-link text-light">Home</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">About</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">Ragister</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">Login</a></li>
        </ul>
    </nav>
</body>
</html>