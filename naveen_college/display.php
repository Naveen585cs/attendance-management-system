<?php
// $sname= "localhost";
// $unmae= "root";
// $password = "msccs585";

// $db_name = "face_recognition";

// $conn = mysqli_connect($sname, $unmae, $password, $db_name);
include "student_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="displayone1.css" type="text/css">                                                        	
</head>
<body id="displaymain">
    <a href="home.php" id="displayhome">Home</a>
    <h1 id="displayh1">STUDENT ALL DETAILS</h1>
    <table id="tabledisplay">
        <tr>
        <td>Student_ID</td>
        <td>Name</td>
        <td>Department</td>
        <td>Course</td>
        <td>Year</td>
        <td>Semester</td>
        <td>Division</td>
        <td>Gender</td>
        <td>DOB</td>
        <td>Mobile_No</td>
        <td>Address</td>
        <td>Roll_No</td>
        <td>Email</td>
        <td>Teacher_Name</td>
    
        </tr>
    <?php
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo '
       
        <tr>
        <td>'.$row['Student_ID'].'</td>
        <td>'.$row['Name'].'</td>
        <td>'.$row['Department'].'</td>
        <td>'.$row['Course'].'</td>
        <td>'.$row['Year'].'</td>
        <td>'.$row['Semester'].'</td>
        <td>'.$row['Division'].'</td>
        <td>'.$row['Gender'].'</td>
        <td>'.$row['DOB'].'</td>
        <td>'.$row['Mobile_No'].'</td>
        <td>'.$row['Address'].'</td>
        <td>'.$row['Roll_No'].'</td>
        <td>'.$row['Email'].'</td>
        <td>'.$row['Teacher_Name'].'</td>
        </tr>
        ';
    }
//    $dateformat = date("d-m-Y");
//    $value = (string)$dateformat;
//    echo gettype($value);
//    echo $value;
    // each gettype(date("d-m-Y"));
    ?>
    </table>
</body>
</html>
