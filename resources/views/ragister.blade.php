<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragister</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">

    <!-- <link rel="stylesheet" herf="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> -->
    <style>
        body {
            background: lightgrey;
        }

        .main {
            background-color: #fff;
        }

        .mycol {
            padding-left: 0;
            padding-right: 0;
        }

        .xcol {
            padding-left: 50px;
            padding-right: 50px;
        }

        .title {
            font-weight: bold;
            color: #ff39c2;
        }

        .btn {
            background-color: #6200EA;
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 0;
        }

        .btn span {
            font-size: 15px;
            font-weight: bold;
        }

        a {
            text-decoration: underline;
            color: #ff39c2 !important;
        }

        .form-control {
            border: none;
            box-shadow: 0px 0.1px 0px 0px #dae0e5;
            border-radius: 0;
        }

        .jk,
        .lm {
            box-shadow: 0px 0.5px 0px 0px #dae0e5 !important;
        }

        .form-contro input [type="text"],
        .form-control input [type="email"],
        .form-control input [type="password"] {
            color: black;
        }

        .form-control:focus {
            outline: 0;
            box-shadow: 0px 0.5px 0px 0px #dae0e5 !important;
        }

        .form-control-placeholder {
            position: absolute;
            top: 0;
            padding: 7px 0 0 0;
            transition: all 300ms;
            opacity: 0.5;
        }

        .form-control:focus+.form-control-placeholder,
        .form-control:valid+.form-control-placeholder {
            font-size: 80% !important;
            transform: translate3d(0, -100%, 0) !important;
            opacity: 1 !important;
        }
    </style>

</head>

<body>
    @include('navbar');
    <div class="container d-flex justify-content-center my-5">
        <div class="row my-2 mx-2 main">
            <!--left-column-->
            <div class="col-md-4 col-12 mycol">
                <!--image-->
                <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" 
                class="img-fluid" style="min-height:100%;" />
            </div>
            <!--right-column-->
            <div class="col-md-8 col-12 xcol">
                <h2 class="title pt-5 pb-3">Sign up</h2>
                <form class="myform">
                    <div class="row rone">
                        <div class="form-group col-md-6 fone py-3">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="form-group col-md-6 ftwo py-3">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="row rtwo">
                        <div class="form-group col-md-6 fthree py-3">
                            <input type="text" class="form-control jk" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-6 ffour py-3">
                            <input type="email" class="form-control lm" placeholder="knwst@gmail.com">
                        </div>
                    </div>
                    <div class="row rthree">
                        <div class="form-group col-md-6 ffive py-3">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6 fsix py-3">
                            <input type="password" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="row rfour">
                        <div class="form-group col-md-6 fseven py-3">
                            <button type="submit" class="btn btn-primary"><span>Create account</span></button>
                        </div>
                        <div class="form-group col-md-6 feight py-3">
                            <p class="text-muted">Already have an account?<br><a href="#">Sign in</a></p>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>