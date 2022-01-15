<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
     initial-scale=1.0">
    <title>form</title>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font awesome-->
    <script src="https://kit.fontawesome.com/cb16f5664a.js" crossorigin="anonymous"></script>

    <!-- link to css-->
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- for international phone number -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>

<body>

    <div class="container">

        <h3>Tell us about you</h3>

        <p class="top-para">Please tell us a bit about you so that we can personalize your onboarding experience.</p>

    
            <label class="control-label">You are looking for,</label>

            <!-- <div class="row">  -->


                 <!-- <div class="col-lg-6">
                    <div class="btn btn-outline-secondary  bt1"><span class="emoji"><i
                                class="fas fa-pen-nib"></i></span>Designs
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="btn btn-outline-primary bt2"><span class="emoji"> <i
                                class="fas fa-file-contract"></i></span>Projects
                    </div>
                </div>
            </div>  -->

            <form action = "" method = "post">
              
            <div class="form-group">
                <label class="control-label">Full Name</label>
                <input type="text" class="form-control" value="Elizabeth Fionsa" name = "fullname">
            </div>

             <!-- <div class="form-group">
                <label class="control-label">Location</label>
                <input type="text" class="form-control" value="Los Angeles">
            </div>  -->

            <div class="form-group">
                <label class="control-label">Phone Number</label>
                <input type="text" class="form-control" name = "pnum">
            </div>
            
            <div class="form-group">
                <label class="control-label">Roll Number</label>
                <input type="text" class="form-control" name = "rnum">
            </div>
            <input type = "submit" value ="Submit" name = "submit">
            </form>
            <!-- <button type="button" id="signup" class="btn btn-primary btn-lg">Proceed to next step<span
                    style="padding-left:6px">&#8594</span>
            </button> -->
</div>


<?php
  if(isset($_POST["submit"])){
      $servername = "192.168.100.18:3306";
      $username = "root";
      $password = "";
      $dbname = "demo-form1";

      $conn = new mysqli($servername, $username, $password, $dbname);
  
      
      if($conn->connect_error){
          die("Connection failed:" . $conn->connect_error);
      }

      $fullname = $_POST["fullname"];
      $pnum = $_POST["pnum"];
      $rnum = $_POST["rnum"];

      $sql = "INSERT INTO userinfo(fullname,pnum,rnum)VALUES('$fullname','$pnum','$rnum')";

      if (mysqli_query($conn, $sql)) {
          echo "New record created sucessfully";

      }
      else{
          echo "Error" .$sql . "" . mysqli_error($conn);
      }
      $conn->close();
  }

?>
<!--       
         if(isset($_POST["submit"])){
            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "Test1";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

$prollno=$_POST["rollno"];
$pname=$_POST["name"];
$pmobileno=$_POST["mobileno"];
$sql = "INSERT INTO mystudent(rollno,name,mobileno)VALUES($prollno,'$pname','$pmobileno')";

            
            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
    -->
      