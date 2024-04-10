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
  $sql = "DELETE FROM details WHERE ID = $id";

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
?>
<?php
  $conn->close();

  header("Location: admin.php");
  exit();
?>
