
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

<<<<<<< HEAD
  
// <!--       
//          if(isset($_POST["submit"])){
//             $servername = "localhost:3306";
//             $username = "root";
//             $password = "";
//             $dbname = "Test1";

//             // Create connection
//             $conn = new mysqli($servername, $username, $password, $dbname);

//             // Check connection
//             if ($conn->connect_error) {
//                die("Connection failed: " . $conn->connect_error);
//             } 

// $prollno=$_POST["rollno"];
// $pname=$_POST["name"];
// $pmobileno=$_POST["mobileno"];
// $sql = "INSERT INTO mystudent(rollno,name,mobileno)VALUES($prollno,'$pname','$pmobileno')";
=======
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
>>>>>>> baa7a0d7ad546eb8d3423f1121c40ae28a15fe3d

            
//             if (mysqli_query($conn, $sql)) {
//                echo "New record created successfully";
//             } else {
//                echo "Error: " . $sql . "" . mysqli_error($conn);
//             }
//             $conn->close();
//          }
//       ?>
   
      
