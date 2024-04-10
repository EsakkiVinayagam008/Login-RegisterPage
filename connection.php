<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "register";




$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else if (isset($_REQUEST['submit']))
{
  $User_name = $_REQUEST['User_name'];
  $Password = md5($_REQUEST['Password']);
  $select_query=mysqli_query($conn, "select * from details where User_name='$User_name' and Password='$Password'");
  $result =mysqli_num_rows($select_query);
  if($result>0)
  {?>
  <script>
    alert("Login Success");
  </script>

 <?php }
 else{ 
  ?>
  <script>
    alert("Invalid login Credential");
  </script>
  <?php 
 }
}
?>