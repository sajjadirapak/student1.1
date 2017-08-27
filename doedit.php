<?php
    require_once "config.php";
 
    //print_r($_POST);die();
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $tel = $_POST['tel'];
 
 
    $sql = "UPDATE `students` SET"
               ." `firstname` = '$firstname', `lastname` = '$lastname', `age` = '$age', `tel` = '$tel' "
               ." WHERE `students`.`id` = $id;";
 
 
    $query = null;
    if($id && $firstname && $lastname && $tel){
        $query = mysqli_query($conn,$sql);      
    }
     
?>
 
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
 
<?php
    if($query){
        echo "แก้ไขข้อมูลสำเร็จ";       
    }else {
        echo "แก้ไขข้อมูลไม่สำเร็จ";        
    }
 
?>
<br/>
<a href="index.php">Index</a>
</body>
</html>
