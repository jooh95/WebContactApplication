<?php

include "connectDB.php";

$sql = "SELECT * FROM user;";

$result = mysqli_query($DB_Link, $sql);

if(mysqli_num_rows($result)){
?>

<html>
<head>
	<title>Contact List</title>
</head>
<body>
	<table border="1" width="860px" border="0" cellspacing="0" cellpadding="0">
		<tr bgcolor="yellow" align="center">
			<td width="80px">Name</font></td>
			<td width="30px">Sex</td>
			<td width="150px">Telephone</td>
			<td width="150px">Email</td>
			<td width="400px">Notes</td>
			<td width="50px"></td>
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
			<td><a href="./deleteAction.php?telephone=<?=$input[2];?>">delete</a></td>
		</tr>
<?php
	}
}
else{
	print('There is no data to delete!');
}
mysqli_free_result($result);

mysqli_close($DB_Link);
?>

	</table>
</body>
</html>
