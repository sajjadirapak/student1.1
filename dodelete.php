<?php
    require_once "config.php";
 
    //print_r($_POST);die();
    $id = $_POST['id'];
 
 
 
    $sql = "DELETE FROM `students` WHERE `students`.`id` = $id";
 
    $query = mysqli_query($conn,$sql);      
 
     
?>
 
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
 
<?php
    if($query){
        echo "ลบข้อมูลสำเร็จ";      
    }else {
        echo "ลบข้อมูลไม่สำเร็จ";       
    }
 
?>
<br/>
<a href="index.php">Index</a>
</body>
</html>