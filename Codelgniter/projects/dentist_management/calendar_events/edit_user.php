<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["title"]);
for($i=0;$i<$usersCount;$i++) {
$result=mysqli_query($conn,"UPDATE calendar_events set title='" . $_POST["title"][$i] . "', start='" . $_POST["start"][$i] . "', end='" . $_POST["end"][$i] . "', description='" . $_POST["description"][$i] . "',service='" . $_POST["service"][$i] . "', provider='" . $_POST["provider"][$i] . "' WHERE ID='" . $_POST["ID"][$i] . "'");
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
if (!isset($_POST["calendar_events"])){
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
$rowCount = count($_POST["calendar_events"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn,"SELECT * FROM calendar_events WHERE ID='" . $_POST["calendar_events"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>ID</label></td>
<td><input type="text" name="ID[]" class="txtField" value="<?php echo $row[$i]['ID']; ?>"></td>
</tr>
<td><label>title</label></td>
<td><input type="text" name="title[]" class="txtField" value="<?php echo $row[$i]['title']; ?>"></td>
</tr>
<td><label>start</label></td>
<td><input type="date" name="start[]" class="txtField" value="<?php echo $row[$i]['start']; ?>"></td>
</tr>
<td><label>end</label></td>
<td><input type="date" name="end[]" class="txtField" value="<?php echo $row[$i]['end']; ?>"></td>
</tr>
<td><label>description</label></td>
<td><input type="text" name="description[]" class="txtField" value="<?php echo $row[$i]['description']; ?>"></td>
</tr>
<td><label>service</label></td>
<td><input type="text" name="service[]" class="txtField" value="<?php echo $row[$i]['service']; ?>"></td>
</tr>
<td><label>provider</label></td>
<td><input type="text" name="provider[]" class="txtField" value="<?php echo $row[$i]['provider']; ?>"></td>
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