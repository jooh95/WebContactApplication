<?php

if(empty($_GET["telephone"])){
	echo "<script>alert('Please enter the name')</script>";
	exit();
}

include "connectDB.php";

$telephone = $_GET["telephone"];

$sql = "DELETE FROM user WHERE (telephone = '$telephone');";
$result = mysqli_query($DB_Link, $sql);

if(!$result){
	print(mysqli_error($DB_Link));
}

mysqli_close($DB_Link);
?>

<html>
<head>
	<title>Add Page</title>
	<script type="text/javascript">
		window.onload = function(){
			if(document.getElementById('male').value == 'm'){
				document.getElementById('male').checked = true;
			}
			else if(document.getElementById('female').value == 'f'){
				document.getElementById('female').checked = true;
			}

			if(document.getElementById("tel_front3").value == '010'){
				document.getElementById("tel_front3").selectedIndex = 0;
			}
			else if(document.getElementById("tel_front3").value == '011'){
				document.getElementById("tel_front3").selectedIndex = 1;
			}
			else if(document.getElementById("tel_front3").value == '016'){
				document.getElementById("tel_front3").selectedIndex = 2;
			}
			else if(document.getElementById("tel_front3").value == '017'){
				document.getElementById("tel_front3").selectedIndex = 3;
			}
			else if(document.getElementById("tel_front3").value == '018'){
				document.getElementById("tel_front3").selectedIndex = 4;
			}
			else if(document.getElementById("tel_front3").value == '019'){
				document.getElementById("tel_front3").selectedIndex = 5;
			}
			
			
		}
	</script>
</head>

<body>
	<header>
		
	</header>

	<section>
		<form method="post" action="modifyAction.php" onsubmit="return checkInsertedData()">
			<table border="1" width="450" cellspacing="0" cellpadding="3">
				<tr>
					<td colspan="2" align="center"><font size="5">Modify Contact Data</td>
				</tr>
				<tr>
					<td><font color="red">*</font>Name</td>
					<td><input type="text" name="name" id="name" value="<?=$_GET["name"];?>"></td>
				</tr>
				<tr>
					<td><font color="red">*</font>Sex</td>
					<td>
						<input type="radio" name="sex" value="<?=$_GET["sex"];?>" id="male">Male
						<input type="radio" name="sex" value="<?=$_GET["sex"];?>" id="female">Female
					</td>
				</tr>
				<tr>
					<td><font color="red">*</font>Telephone</td>
					<td>
						<select name="tel_front3" id="tel_front3">
							<option value="<?=substr($_GET["telephone"],0, 3);?>">010</option>
							<option value="<?=substr($_GET["telephone"],0, 3);?>">011</option>
							<option value="<?=substr($_GET["telephone"],0, 3);?>">016</option>
							<option value="<?=substr($_GET["telephone"],0, 3);?>">017</option>
							<option value="<?=substr($_GET["telephone"],0, 3);?>">018</option>
							<option value="<?=substr($_GET["telephone"],0, 3);?>">019</option>
						</select> -
						<input type="text" name="tel_middle4" size="4" maxlength="4" value="<?=substr($_GET["telephone"],3, 4);?>" id="tel_middle4"> - 
						<input type="text" name="tel_back4" size="4" maxlength="4" value="<?=substr($_GET["telephone"],7, 4);?>" id="tel_back4">
					</td>
				</tr>
				<tr>    
					<td></font>Email</td>
					<td><input type="email" name="email" id="email" value="<?=$_GET["email"];?>"></td>
				</tr>
				<tr>
					<td>Notes</td>
					<td><textarea name="notes" rows="3" cols="45"><?=$_GET["notes"];?></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Rest"></td>
				</tr>
			</table>
		</form>
		
	</section>

</body>
</html>

<script type="text/javascript">
	function checkInsertedData(){
		if(document.getElementById('name').value == ""){
			alert("Please Insert the Name");
			document.getElementById('name').focus();
			return false;
		}

		if(document.getElementById('tel_front3').value == ""){
			alert("Please Insert the Telehpone Number");
			document.getElementById('tel_front3').focus();
			return false;
		}

		if(document.getElementById('tel_middle4').value == ""){
			alert("Please Insert the Telehpone Number");
			document.getElementById('tel_middle4').focus();
			return false;
		}

		if(document.getElementById('tel_back4').value == ""){
			alert("Please Insert the Telehpone Number");
			document.getElementById('tel_back4').focus();
			return false;
		}
	}
</script>