<?php
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
    <h1 id="displayh1">STUDENT 6 MONTH ATTENDANCE </h1> 
    <table id="atttable">
        <tr>
        <td>ID</td>
        <td>rollno</td>
        <td>name</td>
        <td>date</td>
        <td>date name</td>
        <td>Total Attendance</td>
        
        </tr>
    <?php
    $sql = " SELECT std_id,std_roll_no,std_name,std_date,
    case
    when weekday(std_date) = '0' then 'monday'
    when weekday(std_date) = '1' then 'tuesday'
    when weekday(std_date) = '2' then 'wednesday'
    when weekday(std_date) = '3' then 'thursday'
    when weekday(std_date) = '4' then 'friday'
    when weekday(std_date) = '5' then 'saturday'
    when weekday(std_date) = '6' then 'sunday'
    end as dayname,(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5) as totalhours  from stdattendance where std_date >= date_sub(curdate(),interval 6 month);";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo '
       
        <tr>
        <td>'.$row['std_id'].'</td>
        <td>'.$row['std_roll_no'].'</td>
        <td>'.$row['std_name'].'</td>
        <td>'.$row['std_date'].'</td>
        <td>'.$row['dayname'].'</td>
        <td>'.$row['totalhours'].'</td>
        </tr>
        ';
    }
    ?>
    </table>
</body>
</html>
<?php
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
    <h1 id="displayh1">STUDENT 6 MONTH ATTENDANCE </h1> 
    <table id="atttable">
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance where std_date >= date_sub(curdate(),interval 6 month) group by std_name;";
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
    ?>
    </table>
</body>
</html>