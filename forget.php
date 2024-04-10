<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Page</title>
    <script type="text/javascript" scr="js.js"></script>
    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f702299dce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito"> 
</head>

   
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
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;border: 1px solid;
  padding: 10px;
  box-shadow: 10px 10px #262626;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Forget Page!</h3> 
      <form action="forgetpassword.php" name="form1" method="POST">
	  <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control"  placeholder="abcd@gmail.com" id="Email" name="Email" required>
        </div>
    
				  <br>
				  <div class="form-group">
            <label for="Date_of_Birth">Date-of-Birth</label>
            <input type="date" class="form-control"  placeholder="dd/mm/yyyy" id="Date_of_Birth" name="Date_of_Birth" required>
            <script>
  // Add an event listener to the Date_of_Birth input field
  document.getElementById("Date_of_Birth").addEventListener("change", function() {
    // Get the value of the Date_of_Birth field
    var dobValue = document.getElementById("Date_of_Birth").value;
    // Calculate the age based on the entered date of birth
    var dob = new Date(dobValue);
    var ageDiffMs = Date.now() - dob.getTime();
    var ageDate = new Date(ageDiffMs);
    var age = Math.abs(ageDate.getUTCFullYear() - 1970);
    
    // Check if the age is less than 18
    if(age < 18) {
      // If age is less than 18, display an error message
      alert("You must be at least 18 years old to register.");
      // Clear the Date_of_Birth field
      document.getElementById("Date_of_Birth").value = "";
    }
  });
</script>

        </div>
      
                <br>
      
                  <button class="btn btn-primary btn-lg btn-block" href="forgetpassword.php" type="submit" name="submit">Send</button>
                  </form>
                  
      
                 
                  
      
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