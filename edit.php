<?php
     
    require_once "config.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM students where id=$id";
    $query = mysqli_query($conn,$sql);
     
    $num_student = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);
 
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
 
<h1>เพิ่มรายการนักเรียน</h1>
 
<form action="doedit.php" method="post">
<input type="hidden" name="id" value="<?=$row['id']?>"/>
<label>First Name : </label> 
    <input type="text" name='firstname' value="<?=$row['firstname']?>"> <br/>
<label>Last Name : </label>
    <input type="text" name='lastname' value="<?=$row['lastname']?>"> <br/>
<label>Age : </label>
    <input type="number" name='age' value="<?=$row['age']?>"> <br/>
<label>Tel : </label>
    <input type="text" name='tel' value="<?=$row['tel']?>"> <br/>
 
<button>Submit</button> <br/>
<a href="index.php">ยกเลิก</a>
 
</form>
 
 
</body>
</html>