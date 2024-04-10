<?php
session_start();

$User_name = "yamee";
$Password = "cluster";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["User_name"] == $User_name && $_POST["Password"] == $Password) {
        $_SESSION["loggedin"] = true;
        header("Location: search.php");
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <script type="text/javascript" scr="js.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f702299dce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito"> 
</head>
<body style="background-color:blueviolet">
<style>
  body{
    font-family: 'Nunito Sans', sans-serif;
  }
  </style>
<header>
        <div class="row">
            <div class="col-sm-6">
                <i class="fa-solid fa-user-tie"></i>ESAKKI VINAYAGAM V<br><i class="fa-solid fa-phone"></i>7397611963
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <img class="" src="image/Vlogo.png" alt="logo"/>
            </div>
        </div>
         
    </header>
    
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <div class="container mt-5">
        <div class="card" style="border-radius: 1rem;border: 1px solid;
  padding: 10px;
  box-shadow: 10px 10px #262626;">
  <div class="card-body">
                        <div class="card-header text-center">
                            <h5 class="mb-5" style="color: white;">Admin Login!</h5> 
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group">
                                <center>
            <label for="User_name">User name</label></center>
            <input type="text" class="form-control"  placeholder="Enter Your User Name" id="User_name" name="User_name" required>
        </div>
                            </div>
                        
                        <div class="col-sm-6">
                        <div class="form-group"><center>
            <label for="Password">Password</label></center>
            <input type="Password" class="form-control"  placeholder="Enter Your Password" id="Password" name="Password" required>
        </div>
                        </div>
                        </div>
</div>
 <br>
<center>
    <div class="form-group">
        <button type="submit" class="btn btn-success  btn-block"  href="search.php">Submit</button>
      </div>
</center>
  </div>
  
        </div>
    </form>
</body>
</html>



