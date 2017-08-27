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
 
<h1>คุณต้องการลบข้อมูลนี้ใช่หรือไม่</h1>
 
<form action="dodelete.php" method="post">
<input type="hidden" name="id" value="<?=$row['id']?>">
<label>First Name : </label> <?=$row['firstname']?> <br/>
<label>Last Name : </label> <?=$row['lastname']?> <br/>
<label>Age : </label> <?=$row['age']?> <br/>
<label>Tel : </label> <?=$row['tel']?> <br/>
 
 
<button>Submit</button> <br/>
<a href="index.php">ยกเลิก</a>
 
</form>
 
 
</body>
</html>