<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "register");
$output = '';

 $query = "SELECT * FROM details";
 $result = mysqli_query($connect, $query);
 
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>First Name</th>  
                         <th>Last Name</th>  
                         <th>Phone No</th>
                         <th>Email</th>
                         <th>Gender</th>  
                         <th>Date-of-Birth</th>  
                         <th>User Name</th>  
                         <th>Password</th>
                         <th>State</th>
                         <th>Country</th>  
                         <th>Address</th>  
                         <th>Qualification</th>  
                         <th>Marital Status</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["ID"].'</td>  
                         <td>'.$row["First_name"].'</td>  
                         <td>'.$row["Last"].'</td>  
                         <td>'.$row["Phone_no"].'</td>  
                         <td>'.$row["Email"].'</td>
                         <td>'.$row["Gender"].'</td>  
                         <td>'.$row["Date_of_Birth"].'</td>  
                         <td>'.$row["User_name"].'</td>  
                         <td>'.$row["Password"].'</td>  
                         <td>'.$row["State"].'</td>
                         <td>'.$row["Country"].'</td>  
                         <td>'.$row["Address"].'</td>  
                         <td>'.$row["Qualification"].'</td>  
                         <td>'.$row["Marital_Status"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Length: ' . strlen($output));
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 
?>