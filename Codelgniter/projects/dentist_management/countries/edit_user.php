<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["sortname"]);
for($i=0;$i<$usersCount;$i++) {
$result=mysqli_query($conn,"UPDATE countries set sortname='" . $_POST["sortname"][$i] . "', name='" . $_POST["name"][$i] . "', phonecode='" . $_POST["phonecode"][$i] . "' WHERE country_id='" . $_POST["country_id"][$i] . "'");
}
header("refresh:1; url=list_user.php");
}
?>
<html>
<head>
<title>Edit Multiple User</title>
<link rel="stylesheet" type="text/css" href="../styles.css" />
</head>
<body>
<?php
if (!isset($_POST["countries"])){
	if ($result){
		echo "Successfully Updated";
	}else{
		echo "Sorry did not Update";
	}
}else {
?>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="tableheader">
<td>Edit User</td>
</tr>
<?php
$rowCount = count($_POST["countries"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn,"SELECT * FROM countries WHERE country_id='" . $_POST["countries"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>country_id</label></td>
<td><input type="number" name="country_id[]" class="txtField" value="<?php echo $row[$i]['country_id']; ?>"></td>
</tr>
<td><label>sortname</label></td>
<td><input type="text" name="sortname[]" class="txtField" value="<?php echo $row[$i]['sortname']; ?>"></td>
</tr>
<td><label>name</label></td>
<td><input type="text" name="name[]" class="txtField" value="<?php echo $row[$i]['name']; ?>"></td>
</tr>
<td><label>phonecode</label></td>
<td><input type="number" name="phonecode[]" class="txtField" value="<?php echo $row[$i]['phonecode']; ?>"></td>
</tr>

</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
<?php
}
?>
</body></html>