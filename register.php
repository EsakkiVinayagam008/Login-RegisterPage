
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://kit.fontawesome.com/f702299dce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito"> 
</head>
<body style="background-color: blueviolet;" class="body">
<header>
        <div class="row">
            <div class="col-sm-6">
                <i class="fa-solid fa-user-tie"></i>ESAKKI VINAYAGAM V<br><i class="fa-solid fa-phone"></i>7397611963
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <img class="" src="image/Vlogo.png" alt="logo" />
            </div>
        </div>
         
    </header>
    <br><br>
    

            <div class="container mt-5"   >
                <div class="card" style="border-radius: 1rem;border: 1px solid;
  padding: 10px;
  box-shadow: 10px 10px #262626;">
                    <div class="card-body">
                        <div class="card-header text-center">
                            
                            <h5 class="mb-5" style="color: white;">REGISTER PAGE!</h5> 
                        </div>
                        <br>
                        <form action="reg.php" method="post" name="form1"enctype="multipart/form-data">
                            
                               
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="First_name">First Name</label>
                                        <input type="text" class="form-control"  placeholder="Enter the First name" id="First_name" name="First_name" required>
                                        <script>
  // Add event listener to First_name input field
  document.getElementById("First_name").addEventListener("keyup", function() {
    this.value = this.value.toUpperCase();
    this.value = this.value.replace(/[0-9]/g, '');
  });
</script>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Last">Last Name</label>
                                        <input type="text" class="form-control"  placeholder="Enter the Last name" id="Last" name="Last" required>
                                        <script>
                                            document.getElementById("Last").addEventListener("keyup",function(){
                                                this.value = this.value.toUpperCase();
                                                this.value = this.value.replace(/[0-9]/g, '')
                                            })
                                            </script>
                                    </div>
                                </div>
                                
</div>
<br>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Phone_no">Phone number</label>
            <input type="number" class="form-control"  placeholder="9876543210" id="Phone_no" name="Phone_no" required>
            <script>
  document.getElementById("Phone_no").addEventListener("input", function() {
    // Remove any non-digit characters
    this.value = this.value.replace(/\D/g, '');
    // Limit input to only 10 digits
    this.value = this.value.slice(0, 10);   
  });
</script>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control"  placeholder="abcd@gmail.com" id="Email" name="Email" required>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-6">
    <label for="Gender">Gender:</label>
    <br>
    <div class="form-group">
        <div class="form-check ">
            <input type="radio" class="form-check-input" id="Gender"  name="Gender" value="Male">
            <label for="Gender" class="form-check-label">Male</label><br>
            <input type="radio" class="form-check-input" id="Gender" name="Gender" value="Female">
            <label for="Gender" class="form-check-label">Female</label><br>
            <input type="radio" class="form-check-input" id="Gender" name="Gender" value="Others">
            <label for="Gender" class="form-check-label">Others</label>
        </div>
    </div>

    </div>
    <div class="col-sm-6">
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
        </div>
    </div>

<br>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="User_name">User name</label>
            <input type="email" class="form-control"  placeholder="abc@01" id="User_name" name="User_name" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="Password" class="form-control"  placeholder="Enter your Password" id="Password" name="Password" required>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="State">State</label>
            <input type="text" class="form-control"  placeholder="Enter your State" id="State" name="State" required>
            <script>
  document.getElementById("State").addEventListener("keyup", function() {
    this.value = this.value.toUpperCase();
  });
</script>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="Country">Country</label>
            <input type="text" class="form-control"  placeholder="Enter your Country" id="Country" name="Country" required>
            <script>
  document.getElementById("Country").addEventListener("keyup", function() {
    this.value = this.value.toUpperCase();
  });
</script>
        </div>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="Address">Address</label>
            
            <textarea class="form-control" placeholder="Enter your Address" id="Address" name="Address" rows="3"></textarea>
        </div>
    </div>
    
</div>
<br>


<div class="row">
<div class="col-sm-6">
    <label for="Qualification">Qualification:</label>
    <br>
    <div class="form-group">
        <div class="form-check ">
            <input type="checkbox" class="form-check-input" id="Qualification"  name="Qualification" value="Under Graduate">
            <label for="Qualification" class="form-check-label">Under Graduate</label><br>
            <input type="checkbox" class="form-check-input" id="Qualification" name="Qualification" value="post Graduate">
            <label for="Qualification" class="form-check-label">Post Graduate</label><br>
            <input type="checkbox" class="form-check-input" id="Qualification" name="Qualification" value="Diploma">
            <label for="Qualification" class="form-check-label">Diploma</label>
        </div>
    </div>
</div>
<div class="col-sm-6">
    <label >Marital Status</label>
    <select class="form-control" name="Marital_Status">
        <option value="Single">Single</option>
        <option value="Married">Married</option>
        <option value="Divorced">Divorced</option>
      </select>
</div>
</div>

<br>
<div class="row">
    <div class="col-sm-6">
  
    <label for="Profile">Profile Picture</label> <br>
    <input type="file" class="custom-file-input" id="inputGroupFile02" name="picture" required>


    </div>
    <div class="col-sm-6">
    <label for="file">Resume</label> <br>
      <input type="file" class="custom-file-input" id="inputGroupFile02" name="file" required>
    </div>
</div>
  
<br>

	
	

		 
	
    <br>
<center>
    <div class="form-group">
        <button type="submit" class="btn btn-primary  btn-block" target="_parent" href="login.php">Submit</button>
      </div>
</center>
                        </form>
                    </div>
                </div>
            </div>
        
<br><br><br>
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