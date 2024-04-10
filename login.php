<!DOCTYPE html>
<html lang="en">
<head>
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
<?php
include('connection.php');


?>
   
<body style="background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));">
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

  
 
    <section class="vh-100" style="background-color: blueviolet;">
    <br>
    <div class="form-group" style="text-align: right;">
      <a href="loo.php">  <button type="submit" class="btn btn-success  btn-block"  href="loo.php">Admin Login</button></a>
      </div>
        <div class="container py-5 h-100 mb-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;border: 1px solid;
  padding: 10px;
  box-shadow: 10px 10px #262626;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Login!</h3> 
      <form action="user.php" name="form1" method="POST">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="User_name">Username</label>
                    <input type="email" id="User_name" name="User_name" class="form-control form-control-lg" placeholder="Enter your Username" required>
                   
                  </div>
      
                  <div class="form-outline mb-4">
                    <label class="form-label" for="Password">Password</label>
                    <input type="password" id="Password" name="Password" class="form-control form-control-lg" placeholder="Enter Your Password" required>
                    <a href="forget.php">Forget Password?</a>
                  </div>
             
                  <!-- <div id="captcha-container"></div>
                  <input type="text" id="captcha-input" required>
                  
                 
                  <br>
                  <script type="text/javascript">
                 const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

// Generate a random captcha string
function generateCaptcha() {
  let captcha = '';
  for (let i = 0; i < 6; i++) {
    captcha += chars.charAt(Math.floor(Math.random() * chars.length));
  }
  return captcha;
}

// Render the captcha in the container element
function renderCaptcha(container) {
  const captcha = generateCaptcha();
  container.innerText = captcha;
}

// Check if the user input matches the captcha
function checkCaptcha() {
  const input = document.getElementById('captcha-input').value;
  const captcha = document.getElementById('captcha-container').innerText;
  return input === captcha;
}

// Enable submit button if the captcha is solved correctly
function enableSubmit() {
  const submitBtn = document.getElementById('submit-btn');
  submitBtn.enableSubmit = !checkCaptcha();
}

// Initialize the captcha on page load
window.onload = function() {
  const container = document.getElementById('captcha-container');
  renderCaptcha(container);

  // Update submit button state on user input
  const input = document.getElementById('captcha-input');
  input.addEventListener('input', enableSubmit);
}
    </script> -->
    
                  <button class="btn btn-primary btn-lg btn-block" onclick="checkCaptcha()" id="login" type="submit" name="submit">Login</button>
                  </form>
                  <hr class="my-4">
      
                 
                  
      <label>Create Your account<a href="register.php" target="_self"> register here</a></label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    


      <footer style="background-color: white;">
  
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
</footer>
</body>
</html>

<!-- <script>
$(doucument).on('click','#submit' function(){
  var response = grecaptcha.getResponse();
  if(response.length==0)
  {
    alert("please verify you are not a robot ");
    return false;
  }
})
  </script> -->