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
        /* .data{
            display: flex;
        } */
        /* body{
        background-image: url(../emoji/a1.jpg);
        background-repeat: no-repeat; 
        background-size:cover;
     }
        label , input , h1 {
            color: white;
        } */
        .data{
            margin-top: 7%;
            margin-bottom: 7% ;

        }
        input[type=submit]:hover {
        background-image:linear-gradient(to bottom, #404040,#317693,#073ca8); 

          }   
          input[type=submit] {
            background-image:linear-gradient(to top, #404040,#1282d8); 
                color: white;
                padding: 12px 35px;
                border: none;
                border-radius: 10%;
                cursor: pointer;
                align-items: center;
                border: 1px solid black;
           margin-bottom: 4%;
           margin-top: 5%;
           margin-left: 45%;
          /* text-align: center; */
                }
        
    </style>
</head>
<body>
 <div class="data">  


    <!-- background-color:rgba(0, 0, 0, 0.8); -->
      <div class="container bg-info text-dark" style="border: 0.2px solid black;" >
         <form action="" method="POST" enctype="multipart/form-data" class="form-border">
                <div class="row form-head">
                      <h1 class="text-center col-mg-12 p-1">Personal Details</h1>
                 </div>
                <div class=" form-row">
                    <div class="form-group  col-sm-12">
                                <label for="inputName" class="form-check-label">Full_Name</label>
                                <input type="text" placeholder="Full_Name" name="Full_Name" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group  col-sm-12">
                        <!-- <div class="form-group "> -->
                            <label for="inputAddress" class="form-check-label">Address</label>
                            <input type="text" placeholder="Address" name="Address" class="form-control">
                        <!-- </div> -->
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group  col-sm-6 ">
                        <label for="inputContact" class="form-check-label">Contact_No</label>
                        <input type="text" placeholder="Contact_No" name="Contact_No" class="form-control">
                    </div>
                    <div class="form-group  col-sm-6">
                        <label for="inputDate" class="form-check-label">Date_Of_Birth</label>
                        <input type="date" placeholder="Date_Of_Birth" name="Date_Of_Birth" class="form-control">
                    </div>
                </div>
           

                <div class="form-row">
                    <div class="form-group  col-sm-6">
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
                    <div class="form-group  col-sm-6 ">
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
                        <div class="form-group  col-sm-6">
                            <label for="inputQualification" class="form-check-label">Qualification</label>
                            <input type="text" placeholder="Qualification" name="Qualification" class="form-control">
                        </div>
                        <div class="form-group  col-sm-6">
                            <label for="inputOccupation" class="form-check-label">Occupation</label>
                            <input type="text" placeholder="Occupation" name="Occupation" class="form-control">
                        </div>
                   </div>
               
                    <div class="form-group  col-sm-12 ">
                            <label for="inputCounselling_By" class="form-check-label">Counselling_By</label>
                            <input type="text" placeholder="Counselling_By" name="Counselling_By" class="form-control">
                    </div>
            <br>
       <hr>
       <br>
         <!-- background-color:rgba(0, 0, 0, 0.6);   -->
      
                <div class="row form-head">
                      <h1 class="text-center col-mg-12 p-1">Parents Details</h1>
                 </div>
              <div class=" form-row">
                    <div class="form-group  col-sm-12  p-1 ">
                                <label for="inputName" class="form-check-label">Full_Name</label>
                                <input type="text" placeholder="Full_Name" name="Full_Name" class="form-control">
                    </div>
                </div>
            
              <div class="form-row">
                    <div class="form-group  col-sm-6">
                        <label for="inputContact" class="form-check-label">Contact_No</label>
                        <input type="text" placeholder="Contact_No" name="Contact_No" class="form-control">
                    </div>
                    <div class="form-group  col-sm-6">
                        <label for="inputOccupation" class="form-check-label">Occupation</label>
                        <input type="text" placeholder="Occupation" name="Occupation" class="form-control">
                    </div>
             </div>
       <br>
       <hr>
       <br>
        <!-- background-color:rgba(0, 0, 0, 0.6); -->
       
                 <div class="row form-head">
                      <h1 class="text-center col-mg-12 p-1">Course Details</h1>
                 </div>
                 <div class="form-row">
                    <div class="form-group  col-sm-6">
                        <label for="inputCourse" class="form-check-label">Course</label>
                        <input type="text" placeholder="Course" name="Course" class="form-control">
                    </div>
                    <div class="form-group  col-sm-6">
                        <label for="inputAuthorisation" class="form-check-label">Authorisation</label>
                        <input type="text" placeholder="Authorisation" name="Authorisation" class="form-control">
                    </div>
             </div>
         <div class="form-row">
                    <div class="form-group  col-sm-6">
                        <label for="inputFees" class="form-check-label">Fees</label>
                        <input type="text" placeholder="Fees" name="Fees" class="form-control">
                    </div>
                    <div class="form-group  col-sm-6">
                        <label for="inputDuration" class="form-check-label">Duration</label>
                        <input type="text" placeholder="Duration" name="Duration" class="form-control">
                    </div>
         </div>

             <div class="form-row">
                    <div class="form-group  col-sm-6">
                        <label for="inputDiscount" class="form-check-label">Discount</label>
                        <input type="text" placeholder="Discount" name="Discount" class="form-control">
                    </div>
                    <div class="form-group  col-sm-6">
                        <label for="inputBatch" class="form-check-label">Batch_Time</label>
                        <input type="text" placeholder="Batch_Time" name="Batch_Time" class="form-control">
                    </div>
             </div>

             <div class="form-row">
                    <div class="form-group  col-sm-6">
                        <label for="inputNet_Fees" class="form-check-label">Net_Fees</label>
                        <input type="text" placeholder="Discount" name="Discount" class="form-control">
                    </div>
                    <div class="form-group  col-sm-6">
                        <label for="inputDiscount_Offer" class="form-check-label">Discount_Offer</label>
                        <input type="text" placeholder="Discount_Offer" name="Discount_Offer" class="form-control">
                    </div>
             </div>

             <input type="submit" value="Submit">

         </form>
        </div>
        


 </div>
</body>
</html>