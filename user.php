<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DETAILS</title>

    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f702299dce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito"> 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>

 
    
    <body style="background-color: #9734e3;" class="body">
    <header>
        <div class="row">
            <div class="col-sm-6">
                <i class="fa-solid fa-user-tie"></i>ESAKKI VINAYAGAM V<br><i class="fa-solid fa-phone"></i>7397611963
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <img class="" src="image/Vlogo.png" alt="logo" />
            </div> 
        </div>
        
         <div class="row" style="background-color: #9734e3;">
            <div class="col-sm-12" style="text-align: right;">
            <a href='login.php'>    <button type="submit" class="btn btn-primary  float-right" >Log Out</button> </a>
            </div>
         </div>
    </header>

    <br>
    
    
    
   

<section>
<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "register";

$conn = mysqli_connect($host, $user, $password, $database);


$User_name = $_POST["User_name"];
$Password = $_POST["Password"];


$sql = "SELECT * FROM details WHERE User_name='$User_name' AND Password='$Password'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {

  $row = mysqli_fetch_assoc($result);
  $First_name = $row["First_name"];
  $Last= $row["Last"];
  $Phone = $row["Phone_no"];
  $Email = $row["Email"];
  $Gender = $row["Gender"];
  $Date_of_Birth = $row["Date_of_Birth"];
  $User_name = $row["User_name"];
  $Password = $row["Password"];
  $State = $row["State"];
  $Country = $row["Country"];
  $Address = $row["Address"];
  $Qualification = $row["Qualification"];
  $Marital_Status = $row["Marital_Status"];
  $picture = $row["picture"];
 

  
  echo "<br>";
  
  echo "<h2 style='text-align:center;'>❤️*-*Hello $First_name $Last*-*❤️</h2>";
//   echo "<div class='col-md-12  text-left'>";
//   echo "<button type='button' class='btn btn-primary' style='text-align:center'>Log Out</button>";
//   echo "</div>";

  echo "<div class='container'>";
//   echo "<button type='button' href='login.php'>log</button>";
echo "";
echo "";
echo "";
  echo "<table class='table table-bordered'>";
  echo "<tbody>";
  echo "<tr>";
  echo "<td>First Name:</td><td>$First_name</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Last Name:</td><td>$Last</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Phone No.:</td><td>$Phone</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Email:</td><td>$Email</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Gender:</td><td>$Gender</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Date of Birth:</td><td>$Date_of_Birth</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Username:</td><td>$User_name</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Password:</td><td>$Password</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>State:</td><td>$State</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Country:</td><td>$Country</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Address:</td><td>$Address</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Qualification:</td><td>$Qualification</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Marital Status:</td><td>$Marital_Status</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Picture:</td><td><img src='$picture' alt='User Picture'></td>";
  echo "</div>";

}
?>

</section>
<br>
<!-- <footer style="background-color: white;">
  
        <div class="row">
            <div class="col-sm-6">
                <i class="fa-solid fa-user-tie"></i>Esakki Vinayagam V<br>
        <i class="fa-solid fa-user-tie"></i>Giritharan V
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <i class="fa-solid fa-user-tie"></i>Shiyam Kumar B<br>
                <i class="fa-solid fa-user-tie"></i>Pradeep V
            </div>
        </div>
</footer> -->
</body>





    
  
</html>



