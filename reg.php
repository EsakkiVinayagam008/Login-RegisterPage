<?php

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
$picture = $_POST['picture'];
$file= $_POST['file'];



if (isset($_FILES['picture'])) {
  $allow=array("pdf"=>"application/pdf","docx"=>"application/vnd.openxmlformats-officedocument.wordprocessingml.document");
  $name=$_FILES["picture"]["name"];
  $type=$_FILES["picture"]["type"];
  $ext=pathinfo($name,PATHINFO_EXTENSION);
  if (!array_key_exists($ext,$allow)) die ("please select valid file format");
  if(in_array($type,$allow))
    {
      if(file_exists("uploads/".$_FILES["picture"]["name"]))
      {
        echo "This File is already Exists";
      }
     else
     {
      move_uploaded_file($_FILES["picture"] ["tmp_name"],"uploads/".$_FILES["picture"] ["name"]);
      echo "Your File Was Uploaded Sucessfully"; 
    }
    }
    else{
      echo "file cant be uploaded";
    }
  }





if (!empty($First_name) || !empty($Last) || !empty($Phone_no) || !empty($Email) || !empty($Gender) || !empty($Date_of_Birth) || !empty($User_name)|| !empty($password)|| !empty($State)|| !empty($Country)|| !empty($Address)|| !empty($Qualification)|| !empty($Marital_Status)|| !empty($picture) || !empty($file))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "register";




$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT User_name FROM details WHERE User_name = ? LIMIT 1";
  $SELECT_PHONE = "SELECT Phone_no FROM details WHERE Phone_no = ? LIMIT 1";
  $INSERT1 = "INSERT INTO details (First_Name, Last, Phone_no, Email, Gender, Date_of_Birth, User_name, Password, State, Country, Address, Qualification, Marital_Status, picture, file) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $INSERT2 = "INSERT INTO user (User_name, Password) VALUES (?, ?)";
  
  $stmt = $conn->prepare($SELECT_PHONE);
  $stmt->bind_param("s", $Phone_no);
  $stmt->execute();
  $stmt->store_result();
  $phone_num_rows = $stmt->num_rows;
  
  if ($phone_num_rows > 0) {
    // Phone number already exists in database
    echo "This phone number is already registered.";
  } else {
    // Phone number does not exist in database, proceed with insertion
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $User_name);
    $stmt->execute();
    $stmt->store_result();
    $rnum = $stmt->num_rows;

     
     if ($stmt->num_rows == 0) {
        $stmt->close();

        
        $stmt = $conn->prepare($INSERT1);
        $stmt->bind_param("ssissssssssssss", $First_name, $Last, $Phone_no, $Email, $Gender, $Date_of_Birth, $User_name, $Password, $State, $Country, $Address, $Qualification, $Marital_Status, $picture, $file);
        $stmt->execute();
        $stmt->close();

        
        $stmt = $conn->prepare($INSERT2);
        $stmt->bind_param("ss", $User_name, $Password);
        $stmt->execute();
        $stmt->close();
      echo header("location:login.php");
     } else {
      echo "Someone already register using this email";
     }
    //  $stmt->close();
     $conn->close();
    }
}
} else {
 echo "All field are required";
 die();
}
?>

