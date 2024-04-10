<?php
require_once('fpdf/fpdf.php');

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Retrieve data from database
$sql = "SELECT * FROM details";
$result = mysqli_query($conn, $sql);

// Create PDF document
$pdf = new FPDF('L','mm',array(650,297));

 $pdf->AddPage();
 $pdf->SetFont('Arial','B',11);
 $pdf->Cell(40,10,'ID',1,0,'C');
 $pdf->Cell(40,10,'First_name',1,0,'C');
 $pdf->Cell(40,10,'Last',1,0,'C');
 $pdf->Cell(40,10,'Phone_no',1,0,'C');
 $pdf->Cell(60,10,'Email',1,0,'C');
 $pdf->Cell(40,10,'Gender',1,0,'C');
  $pdf->Cell(40,10,'Date_of_Birth',1,0,'C');
 $pdf->Cell(40,10,'User_name',1,0,'C');
  $pdf->Cell(40,10,'Password',1,0,'C');
 $pdf->Cell(40,10,'State',1,0,'C');
 $pdf->Cell(40,10,'Country',1,0,'C');
 $pdf->Cell(80,10,'Address',1,0,'C');
  $pdf->Cell(40,10,'Qualification',1,0,'C');
 $pdf->Cell(40,10,'Marital_Status',1,0,'C');
 $pdf->Ln();

// Add data to PDF document
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(40, 10, $row['ID'], 1,0);
    $pdf->Cell(40, 10, $row['First_name'], 1,0);
    $pdf->Cell(40, 10, $row['Last'], 1,0);
    $pdf->Cell(40, 10, $row['Phone_no'], 1,0);
    $pdf->Cell(60, 10, $row['Email'], 1.0);
    $pdf->Cell(40, 10, $row['Gender'], 1,0);
    $pdf->Cell(40, 10, $row['Date_of_Birth'], 1,0);
    $pdf->Cell(40, 10, $row['User_name'], 1,0);
    $pdf->Cell(40, 10, $row['Password'], 1,0);
    $pdf->Cell(40, 10, $row['State'], 1,0);
    $pdf->Cell(40, 10, $row['Country'], 1,0);
    $pdf->Cell(80, 10, $row['Address'], 1,0);
    $pdf->Cell(40, 10, $row['Qualification'], 1,0);
    $pdf->Cell(40, 10, $row['Marital_Status'], 1,0);
    $pdf->Ln();
}

// Save PDF document and output to browser
$pdf->Output('D', 'mydata.pdf');
?>
