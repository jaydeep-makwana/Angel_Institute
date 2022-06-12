 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{ url('CSS/style.css')}}">
     <title>Admin Signup</title>
 </head>

 <body>
     @include('navbar')
     <div class="container">
         <div class="row m-5 no-gutters shadow-lg">
             <div class="col-md-6 d-none d-md-block">
                 <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" />
             </div>
             <div class="col-md-6 bg-white p-5">
                 <h3 class="pb-3">ADMIN</h3>
                 <div class="form-style">
                     <form action="admin_login" method="post">

                         @csrf
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="First name">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Last name">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control jk" placeholder="Phone">
                         </div>
                         <div class="form-group">
                             <input type="email" class="form-control lm" placeholder="Example@gmail.com">
                         </div>
                         <div class="form-group">
                             <input type="password" class="form-control" placeholder="Password">
                         </div>
                         <div class="form-group">
                             <input type="password" class="form-control" placeholder="Confirm Password">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Approval Code">
                         </div>
                         <div class="form-group">
                             <button type="submit" class="btn btn-primary"><span>Create account</span></button>
                         </div>
                     </form>
                     <div class="sideline">OR</div>
                     <div class="form-group">
                         <p class="text-muted">Already have an account?<br><a href="login" class="text-primary">Sign in</a></p>

                     </div>

                 </div>

             </div>
         </div>
     </div>
 </body>

 </html>