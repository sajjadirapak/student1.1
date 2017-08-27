<?php
    require_once "config.php";
 
    //print_r($_POST);die();
 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $tel = $_POST['tel'];
 
 
    $sql = "INSERT INTO `students`"
        ." (`id`, `firstname`, `lastname`, `age`, `tel`)"
        ." VALUES (NULL, '$firstname', '$lastname', '$age', '$tel');";
 
 
    $query = null;
    if($firstname && $lastname && $tel){
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
        echo "เพิ่มข้อมูลสำเร็จ";       
    }else {
        echo "เพิ่มข้อมูลไม่สำเร็จ";        
    }
 
?>
<br/>
<a href="index.php">Index</a>
</body>
</html>