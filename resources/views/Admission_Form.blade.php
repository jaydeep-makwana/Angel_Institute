<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <title>Admission_Form</title>
    <style>
        .data{
            display: flex;
        }
    </style>
</head>
<body>
 <div class="data">  


    <div class="personal">
      <div class="container m-3 p-5 text-dark mx-auto">
         <form action="" method="POST" enctype="multipart/form-data" class="form-border w-50 bg-info">
                <div class="row form-head">
                      <h2 class="text-center col-mg-12 p-1">Personal Details</h2>
                 </div>
                <div class=" form-row">
                    <div class="form-group col-mg-12 ">
                                <label for="inputName" class="form-check-label">Full_Name</label>
                                <input type="text" placeholder="Full_Name" name="Full_Name" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-mg-12 ">
                        <!-- <div class="form-group "> -->
                            <label for="inputAddress" class="form-check-label">Address</label>
                            <input type="text" placeholder="Address" name="Address" class="form-control">
                        <!-- </div> -->
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col col-sm-6 ">
                        <label for="inputContact" class="form-check-label">Contact_No</label>
                        <input type="text" placeholder="Contact_No" name="Contact_No" class="form-control">
                    </div>
                    <div class="form-group col col-sm-6">
                        <label for="inputDate" class="form-check-label">Date_Of_Birth</label>
                        <input type="date" placeholder="Date_Of_Birth" name="Date_Of_Birth" class="form-control">
                    </div>
                </div>
           

                <div class="form-row">
                    <div class="form-group col col-sm-6">
                        <label for="">Gender :
                                <div class="form-check">
                                    <label for="male" class="form-check-label">
                                        <input type="radio" value="male" class="form-check-input" id="male" name="gender"> male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label for="female" class="form-check-label">
                                        <input type="radio" value="female" class="form-check-input" id="female" name="gender" > female
                                    </label>
                                </div>
                        </label>
                    </div>
                    <div class="form-group col col-sm-6 ">
                        <label for=""> Cast :
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="SC" id="SC" value="SC">
                                    <label for="SC" class="form-check-label">SC</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="ST" id="ST" value="ST">
                                    <label for="ST" class="form-check-label">ST</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="OBC" id="OBC" value="OBC" >
                                    <label for="OBC" class="form-check-label">OBC</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="Gen" id="Gen" value="Gen">
                                    <label for="Gen" class="form-check-label">Gen</label>
                                </div>
                         </label>
                    </div>
                </div>
                   <div class="form-row">
                        <div class="form-group col col-sm-6">
                            <label for="inputQualification" class="form-check-label">Qualification</label>
                            <input type="text" placeholder="Qualification" name="Qualification" class="form-control">
                        </div>
                        <div class="form-group col col-sm-6">
                            <label for="inputOccupation" class="form-check-label">Occupation</label>
                            <input type="text" placeholder="Occupation" name="Occupation" class="form-control">
                        </div>
                   </div>
               
                    <div class="form-group ">
                            <label for="inputCounselling_By" class="form-check-label">Counselling_By</label>
                            <input type="text" placeholder="Counselling_By" name="Counselling_By" class="form-control">
                    </div>
             </form>
          </div>
     </div>

     <div class="parents">
       <div class="container m-3 p-5 text-dark mx-auto">
         <form action="" method="POST" enctype="multipart/form-data" class="form-border w-50 bg-success">
                <div class="row form-head">
                      <h2 class="text-center col-mg-12 p-1">Parents Details</h2>
                 </div>
              <div class=" form-row">
                    <div class="form-group col-mg-12  p-1 ">
                                <label for="inputName" class="form-check-label">Full_Name</label>
                                <input type="text" placeholder="Full_Name" name="Full_Name" class="form-control">
                    </div>
                </div>
            
              <div class="form-row">
                    <div class="form-group col col-sm-6">
                        <label for="inputContact" class="form-check-label">Contact_No</label>
                        <input type="text" placeholder="Contact_No" name="Contact_No" class="form-control">
                    </div>
                    <div class="form-group col col-sm-6">
                        <label for="inputOccupation" class="form-check-label">Occupation</label>
                        <input type="text" placeholder="Occupation" name="Occupation" class="form-control">
                    </div>
             </div>
         </form>
       </div>
     </div>


        <!-- <div class="course">
         <form action="" method="POST" enctype="multipart/form-data" class="form-border w-80 bg-success">

         

         </form>
        </div>-->
 


 </div>
</body>
</html>