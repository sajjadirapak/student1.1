<?php  
    require "config.php";

     $keyword = $_GET['keyword'];

    $sql = "SELECT * FROM students";

    if(isset($keyword)){
 
        $sql = $sql
            ." where firstname like '%$keyword%' "
            ." or lastname like '%$keyword%'"
            ." or tel like '%$keyword%'"
            ." or age like '%$keyword%' "
        ;
 
    }
    $query = mysqli_query($conn,$sql);
    $num_student = mysqli_num_rows($query);
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<h1>รายการนักเรียน</h1>
<b>มีจำนวนนักเรียน <?=$num_student?></b>
<br/>
<br/>
<a href ="create.php">เพิ่มนักเรียน</a>
<br/>
<br/>
<form action="index.php" method="get">
<label>Search : </label><input type="text" name="keyword"/>
<button>Search</button>
</form>
<table>

	<tr>
		
		<th>ID</th>
		<th>Firts Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Tel.</th>
        <th>การจัดการ</th>
	
	</tr>
	<?php  while ($row = mysqli_fetch_assoc($query))  : ?>
	<tr>
	    <td><?=$row['id'] ?></td>
	    <td><?=$row['firstname'] ?></td>
	    <td><?=$row['lastname'] ?></td>
	    <td><?=$row['age'] ?></td>
	    <td><?=$row['tel'] ?></td>
	     <td>
		      <a href="edit.php?id=<?=$row['id']?>">แก้ไข</a>
		      <a href="edit.php?id=<?=$row['id']?>">ลบ</a>

		      
	     </td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>