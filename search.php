<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Tilt+Prism&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://kit.fontawesome.com/f702299dce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito"> 
</head>
<body style="background-color:blueviolet">
<style>
    body{
        font-family: 'Roboto Slab', serif;
    }
    table {
  border-collapse: collapse;
  border-style: groove;
  width: 100%;
  margin: 20px 0;
  color:black;
  font-family: 'Roboto Slab', serif;

}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px groove #ddd;

}

th {
  background-color:black;
  color: white;
}

tr{

    background-color:white;
}

/* tr:nth-child(even) {
  background-color: #orange;
}

tr:nth-child(odd) {
  background-color: #f2f2f2;
} */

tr:hover {
  background-color: blueviolet;
  cursor:pointer; 
}

b{
    color:black;
    font-family: 'Roboto Slab', serif;
}

h1{
    font-family: 'Roboto Slab', serif;
}

    </style>
<center>
    <h1 style="color:black">Welcome, Admin!</h1>
</center>
<hr style="background-color:">
<div class="col-sm-12" style="text-align: right;">
            <a href='login.php'>    <button type="submit" class="btn btn-success  float-right" >Log Out <i class="fa-solid fa-right-from-bracket"></i></button> </a>
            </div>
            <form method="POST" action="search.php">
         <div class="row">
            <div class="col-sm-4">
         <center> <b> <label for="Phone_no">Phone number</label></b>  </center>  
            <input type="number" class="form-control"  placeholder="" id="Phone_no" name="Phone_no">
            </div>
            <div class="col-sm-4">
           <center><b><label for="Gender">Gender</label> </b>  </center> 
            <input type="text" class="form-control"  placeholder="" id="Gender" name="Gender" >
            </div>
            <div class="col-sm-4">
           <center><b><label for="Marital_Status">Marital Status</label> </b></center> 
            <input type="text" class="form-control"  placeholder="" id="Marital_Status" name="Marital_Status">
            </div> 
         </div> 
         <br>
         <center>
         <a href='search.php'>    <button type="submit" class="btn btn-success" name="search" value="Search" ><i class="fa-solid fa-magnifying-glass"></i>Search</button> </a>
         </center>
</form>
         <hr>
         <center>
         <a href='admin.php'>    <button type="submit" class="btn btn-primary" ><i class="fa-solid fa-list"></i>Show All Data</button> </a>
         </center>
         
    <br>
    <?php
     $mysqli = new mysqli('localhost', 'root', '', 'register');

     $data = [
      'Phone_no' => $_POST['Phone_no'],
      'Gender' => $_POST['Gender'],
      'Marital_Status' => $_POST['Marital_Status']
    ];

     // Get the search values from the form
     $Phone_no = $data['Phone_no'];
     $Gender=$data['Gender'];
     $Marital_Status=$data['Marital_Status'];
  
    
    
     // Get the current page number from the URL parameter
     $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
     
     // Calculate the starting point for the current page
     $records_per_page = 10;
     $start_from = ($current_page - 1) * $records_per_page;
  
     // Construct the SQL query based on the search criteria
     $query = "SELECT * FROM details WHERE Phone_no = '$Phone_no' OR Gender = '$Gender' OR Marital_Status = '$Marital_Status' LIMIT $start_from, $records_per_page";
  
     // Execute the SQL query
     $result = $mysqli->query($query);
  
     // Get the total number of records based on search criteria
     $count_query = "SELECT COUNT(*) as total FROM details WHERE Phone_no = '$Phone_no' OR Gender = '$Gender' OR Marital_Status = '$Marital_Status'";
     $count_result = $mysqli->query($count_query);
     $count_row = $count_result->fetch_assoc();
     $total_records = $count_row['total'];
     
     // Calculate the total number of pages
     $total_pages = ceil($total_records / $records_per_page);
     
     // Generate the table HTML code
     echo '<table>';
     echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Email</th><th>Gender</th><th>Date of Birth</th><th>Username</th><th>Password</th><th>State</th><th>Country</th><th>Address</th><th>Qualification</th><th>Marital Status</th><th>Picture</th></tr>';
     
     while ($row = $result->fetch_object()) {
         echo '<tr>';
         echo '<td>' . $row->ID . '</td>';
         echo '<td>' . $row->First_name . '</td>';
         echo '<td>' . $row->Last . '</td>';
         echo '<td>' . $row->Phone_no . '</td>';
         echo '<td>' . $row->Email . '</td>';
         echo '<td>' . $row->Gender . '</td>';
         echo '<td>' . $row->Date_of_Birth . '</td>';
         echo '<td>' . $row->User_name . '</td>';
         echo '<td>' . $row->Password . '</td>';
         echo '<td>' . $row->State . '</td>';
         echo '<td>' . $row->Country . '</td>';
         echo '<td>' . $row->Address . '</td>';
         echo '<td>' . $row->Qualification . '</td>';
         echo '<td>' . $row->Marital_Status . '</td>';
         echo '<td>' . $row->picture . '</td>';
         echo '</tr>';
     }
      echo '</table>';
     echo '<center>';
   echo '<div class="btn-group" role="group" aria-label="Pagination">';
     
   if ($current_page > 1) {
    echo '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($current_page - 1) . '" class="btn btn-secondary">&laquo; Previous</a>';
  }
  if ($current_page < $total_pages) {
    echo '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($current_page + 1) . '" class="btn btn-secondary">Next &raquo;</a>';
  }
    
   echo '</div>';
   echo '</center>';
   
   // Close the database connection
   

// Close the database connection


// Close the database connection
$mysqli->close();
?>
  <hr style="background-color:black">
</body>
</html>


