<style>
    form {
  border: 1px solid #ccc;
  border-radius: 50px 20px;
  padding: 20px;
  max-width: 500px;
  margin: 0 auto;
  background-color:black;
  margin-top:50px;
  margin-bottom:50px;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: white;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="date"],
input[type="password"]
{
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 20px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

.error-message {
  color: red;
  margin-top: 5px;
}


</style>
<?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'register';

  // Create connection
  $conn = new mysqli($host, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
<?php
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    die('Error: ID not found.');
  }
?>
<?php
  $sql = "SELECT * FROM details WHERE ID = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $id=$row['ID'];
      $First_name = $row['First_name'];
$Last = $row['Last'];
$Phone_no = $row['Phone_no'];
$Email = $row['Email'];
$Gender = $row['Gender'];
$Date_of_Birth = $row['Date_of_Birth'];
$User_name = $row['User_name'];
$Password = $row['Password'];
$State = $row['State'];
$Country = $row['Country'];
$Address = $row['Address'];
$Qualification = $row['Qualification'];
$Marital_Status = $row['Marital_Status'];
$picture = $row['picture'];

    }
  } else {
    echo "0 results";
  }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update
    </title>

    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://kit.fontawesome.com/f702299dce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito"> 
</head>
    <body style="background-color: #9734e3;" class="body">
    
<form action="update.php" method="post">

  <input type="hidden" name="ID" value="<?php echo $id ?>"><br>
  <label>First Name:</label>
  <input type="text" name="First_name" value="<?php echo $First_name ?>" oninput="this.value = this.value.toUpperCase()">
  
  <br>
  <label>Last Name:</label>
  <input type="text" name="Last" value="<?php echo $Last ?>"oninput="this.value = this.value.toUpperCase()"><br>
  <label>Phone_no:</label>
  <input type="number" name="Phone_no" value="<?php echo $Phone_no ?>"><br>
  <label>Email:</label>
  <input type="email" name="Email" value="<?php echo $Email ?>"><br>
  <label>Gender:</label>
  <input type="text" name="Gender" value="<?php echo $Gender ?>"><br>
  <label>Date-of-Birth:</label>
  <input type="date" name="Date_of_Birth" value="<?php echo $Date_of_Birth ?>"><br>
  <label>Username:</label>
  <input type="email" name="User_name" value="<?php echo $User_name ?>"><br>
  <label>Password:</label>
  <input type="password" name="Password" value="<?php echo $Password ?>"><br>
  <label>State:</label>
  <input type="text" name="State" value="<?php echo $State ?>"oninput="this.value = this.value.toUpperCase()"><br>
  <label>Country:</label>
  <input type="text" name="Country" value="<?php echo $Country ?>"oninput="this.value = this.value.toUpperCase()"><br>
  <label>Address:</label>
  <input type="text" name="Address" value="<?php echo $Address ?>"><br>
  <label>Qualification:</label>
  <input type="text" name="Qualification" value="<?php echo $Qualification ?>"><br>
  <label>Marital_Status:</label>
  <input type="text" name="Marital_Status" value="<?php echo $Marital_Status ?>"><br>
  
  <br><center>
  <button class="btn btn-primary btn-lg text-center"  type="submit" name="submit">Save Change</button></center>

</form>
</body>
</html>




 


