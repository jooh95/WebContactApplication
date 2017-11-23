<?php

if(empty($_POST["name"])){
	echo "<script>alert('There are some missing values')</script>";
	exit();
}

include "connectDB.php";

$name = $_POST["name"];

$sql = "SELECT * FROM user where name = '$name';";
$result = mysqli_query($DB_Link, $sql);

if(!$result){
	print(mysqli_error($DB_Link));
}

if(mysqli_num_rows($result)){
?>

<html>
<head>
	<title>Contact List</title>
</head>
<body>
	<table border="1" width="810" border="0" cellspacing="0" cellpadding="0">
		<tr bgcolor="yellow" align="center">
			<td width="80px">Name</font></td>
			<td width="30px">Sex</td>
			<td width="150px">Telephone</td>
			<td width="150px">Email</td>
			<td width="400px">Notes</td>
		</tr>

	<?php
		while ($input = mysqli_fetch_row($result)) {
	?>
		<tr>
			<td align="center"><?=$input[0];?></td>
			<td align="center"><?=$input[1];?></td>
			<td align="center"><?=$input[2];?></td>
			<td align="center"><?=$input[3];?></td>
			<td><?=$input[4];?></td>
		</tr>
	</table>
</body>
</html>

<?php
	}
}else{
		print("There is no data with name "."$name"."!");
	}
?>