<?php
// $sname= "localhost";
// $unmae= "root";
// $password = "msccs585";

// $db_name = "college";

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
    <link rel="stylesheet" href="attendance1.css" type="text/css">                                                        	
<style>
    .at{
        width: 30px;
        font-size: 15px;
    }
</style>
</head>
<body id="attmain">
    <a href="home.php" id="atthome">Home</a>
    <h1 id="displayh1">STUDENT ALL DETAILS</h1>
    <table id="atttable">
        <tr>
        <td>std_id</td>
        <td>std_roll_no</td>
        <td>std_name</td>
        <td>std_date</td>
        <td class='at'>attendance 1st</td>
        <td class='at'>attendance 2st</td>
        <td class='at'>attendance 3st</td>
        <td class='at'>attendance 4st</td>
        <td class='at'>attendance 5st</td>
        <td class='at'>Total attendance</td>
        
        </tr>
    <?php
    $sql = "SELECT std_id,std_roll_no,std_name,std_date,std_attendance1,std_attendance2,std_attendance3,std_attendance4,std_attendance5,(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5) as total FROM stdattendance";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo '
       
        <tr>
        <td>'.$row['std_id'].'</td>
        <td>'.$row['std_roll_no'].'</td>
        <td>'.$row['std_name'].'</td>
        <td>'.$row['std_date'].'</td>
        <td >'.$row['std_attendance1'].'</td>
        <td >'.$row['std_attendance2'].'</td>
        <td>'.$row['std_attendance3'].'</td>
        <td >'.$row['std_attendance4'].'</td>
        <td >'.$row['std_attendance5'].'</td>
        <td >'.$row['total'].'</td>
        </tr>
        ';
    }
//    $dateformat = date("d-m-Y");
//    $value = (string)$dateformat;
//    echo gettype($value);
//    echo $value;
    ?>
    </table>
</body>
</html>
