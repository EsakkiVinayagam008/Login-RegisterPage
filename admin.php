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


<div class="row">
<div class="col-sm-6">
<a href='search.php'>    <button type="submit" class="btn btn-success  float-right" ><i class="fa-solid fa-magnifying-glass"></i> Search</button> </a>
           
</div>

<div class="col-sm-6" style="text-align: right;">
            <a href='login.php'>    <button type="submit" class="btn btn-success  float-right" >Log Out <i class="fa-solid fa-right-from-bracket"></i></button> </a>
            </div>
            </div>
         <hr>
    <br>
    <?php


// Connect to your database
$mysqli = new mysqli('localhost', 'root', '', 'register');



// Get the current page number from the URL parameter
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting point for the current page
$records_per_page = 10;
$start_from = ($current_page - 1) * $records_per_page;

// Get the total number of records
$query = "SELECT COUNT(*) as total FROM details";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
$total_records = $row['total'];

// Calculate the total number of pages
$total_pages = ceil($total_records / $records_per_page);

// Select 10 records for the current page
$query = "SELECT * FROM details LIMIT $start_from, $records_per_page";
$result = $mysqli->query($query);



// Generate the table HTML code
echo '<table>';
echo '<tr><th>ID</th><th>User_id</th><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Email</th><th>Gender</th><th>Date of Birth</th><th>Username</th><th>Password</th><th>State</th><th>Country</th><th>Address</th><th>Qualification</th><th>Marital Status</th><th>Picture</th></tr>';

while ($row = $result->fetch_object()) {
    echo '<tr>';
    echo '<td>' . $row->ID . '</td>';
    echo '<td>' . $row->rec_id . '</td>';
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
    echo '<td><a href="edit.php?id=' . $row->ID . '" class="btn btn-info">Edit</a></td>';

    echo '<td><a href="delete.php?id=' . $row->ID . '" class="btn btn-danger">Delete</a></td>';
    echo '</tr>';
}

echo '</table>';
echo '<center>';
echo '<div class="btn-group" role="group" aria-label="Pagination">';
  
  if ($current_page > 1) {
    echo '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($current_page - 1) . '" class="btn btn-secondary">&laquo; Previous</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
  }
  if ($current_page < $total_pages) {
    echo '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($current_page + 1) . '" class="btn btn-secondary">Next &raquo;</a>';
  }
 
echo '</div>';
echo '</center>';


// Close the database connection
$mysqli->close();
?>
<br>

<div class="row">
  <div class="col-sm-6">
  <center>
<form action="generate_pdf.php" method="POST">
  <button type="submit" class="btn btn-success btn-lg"  name="generate_pdf"><i class="fa-solid fa-circle-down"></i> Download PDF</button>
</form>
</center>
  </div>
  <div class="col-sm-6">
  <center>
<form action="generate_excel.php" method="POST">
  <button type="submit" class="btn btn-success btn-lg"  name="generate_excel"><i class="fa-solid fa-circle-down"></i> Download Excel</button>
</form>
</center>
  </div>
</div>

  <hr style="background-color:black">
</body>
</html>


