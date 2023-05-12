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
</head>
<body id="attmain">
    <a href="home.php" id="atthome">Home</a>
    <h1 id="displayh1">STUDENT ALL ATTENDANCE DETAILS:</h1>
    <table id="atttable">
        <tr>
        <td>Name</td>
        <td>Total_Day</td>
        <td>Total_Hour's</td>
        
        </tr>
    <?php
    $sql = "select std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance group by std_name;";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo '
       
        <tr>
        <td>'.$row['std_name'].'</td>
        <td>'.$row['tottal_day'].'</td>
        <td>'.$row['total_class_hour'].'</td>
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
