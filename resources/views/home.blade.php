<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Home</title>
    <style>
        .anim {
            display: inline-block;
            margin: 0 0.5rem;
            animation: pulse; 
            animation-duration: 2s; 
            animation-iteration-count: infinite;
            }

    </style>
</head>

<body>
    @include('navbar')
    <div class="container-fluid p-5">
        <div class="row p-5 justify-content-center">
            <div class="col-12 p-5 text-center">
                <h1 class="anim">welcome to angle multimedia education </h1>
            </div>
        </div>
    </div>
</body>

</html>