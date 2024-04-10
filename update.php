<?php
// Include database connection code
include 'connection.php';

// Retrieve data from form
$First_name = $_POST['First_name'];
$Last = $_POST['Last'];
$Phone_no = $_POST['Phone_no'];
$Email = $_POST['Email'];
$Gender = $_POST['Gender'];
$Date_of_Birth = $_POST['Date_of_Birth'];
$User_name = $_POST['User_name'];
$Password = $_POST['Password'];
$State = $_POST['State'];
$Country = $_POST['Country'];
$Address = $_POST['Address'];
$Qualification = $_POST['Qualification'];
$Marital_Status = $_POST['Marital_Status'];
$id = $_POST['ID'];

// Construct SQL query
$sql = "UPDATE details SET First_Name='$First_name', Last='$Last', Phone_no='$Phone_no', Email='$Email', Gender='$Gender', Date_of_Birth='$Date_of_Birth', User_name='$User_name', Password='$Password', State='$State', Country='$Country', Address='$Address', Qualification='$Qualification', Marital_Status='$Marital_Status' WHERE ID='$id'";

// Execute SQL query
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("Location: admin.php"); // Redirect to login page
    exit(); 
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
