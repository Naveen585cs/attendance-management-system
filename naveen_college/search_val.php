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
    <link rel="stylesheet" href="search2.css" type="text/css">                                                        	
</head>
<body>
    <a href="home.php" id="searchhome">Home</a>
    <div class="searchmainall">
    <form method="post" id="searchform">
        <h1 id="searchh1" >Search :</h1><br>
        <label id="searchly">Year :</label><br>
        <input id="searchiy" type="text" name="year"><br>
        <input id="searchbtn" type="submit" name="submit">
    </form></div>
</body>
</html>


<div id="searchmain">
    
<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">JANUARY </h1> 
    <table border=2 id="atttable">
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-01-01' and '$y-01-31'
    group by std_name;";
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
    <?php
};
?>

<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">FEBRUARY</h1> 
    <table border=2 id="atttable">
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-02-01' and '$y-02-28'
    group by std_name;";
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
    <?php
};
?>

<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">MARCH </h1> 
    <table border=2 id="atttable">
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-03-01' and '$y-03-31'
    group by std_name;";
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
    <?php
};
?>


<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">APRIL </h1> 
    <table id="atttable" border=2>
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-04-01' and '$y-04-30'
    group by std_name;";
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
    <?php
};
?>


<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">MAY</h1> 
    <table id="atttable" border=2>
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-05-01' and '$y-05-31'
    group by std_name;";
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
    <?php
};
?>



<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">JUNE</h1> 
    <table id="atttable"border=2>
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-06-01' and '$y-06-30'
    group by std_name;";
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
    <?php
};
?>



<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">JULY </h1> 
    <table id="atttable"border=2>
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-07-01' and '$y-07-31'
    group by std_name;";
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
    <?php
};
?>



<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">AUGUST</h1> 
    <table id="atttable"border=2>
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-08-01' and '$y-08-31'
    group by std_name;";
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
    <?php
};
?>



<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">SEPTEMBER</h1> 
    <table id="atttable"border=2>
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-09-01' and '$y-09-30'
    group by std_name;";
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
    <?php
};
?>



<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">OCTOBER</h1> 
    <table id="atttable"border=2>
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-10-01' and '$y-10-31'
    group by std_name;";
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
    <?php
};
?>


<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">NOVEMBER</h1> 
    <table id="atttable"border=2>
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-11-01' and '$y-11-30'
    group by std_name;";
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
    <?php
};
?>



<?php 
if(isset($_POST['submit'])){
    $y = $_POST['year'];
    ?>
    <h1 id="displayh1">DECEMBER</h1> 
    <table id="atttable"border=2>
        <tr>
        <td>Name</td>
        <td>Day's</td>
        <td>Hour's</td>
        
        </tr>
    <?php
    $sql = " SELECT std_name,count(std_attendance1)as tottal_day,sum(std_attendance1+std_attendance2+std_attendance3+std_attendance4+std_attendance5)as total_class_hour from stdattendance
    where std_date between '$y-12-01' and '$y-12-31'
    group by std_name;";
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
    <?php
};
?>
</div>