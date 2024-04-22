<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["date"]);
for($i=0;$i<$usersCount;$i++) {
$result=mysqli_query($conn,"UPDATE test_prescription set date='" . $_POST["date"][$i] . "', patient='" . $_POST["patient"][$i] . "', nxt_visit='" . $_POST["nxt_visit"][$i] . "', prescription='" . $_POST["prescription"][$i] . "',service='" . $_POST["service"][$i] . "', doc_id='" . $_POST["doc_id"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");
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
if (!isset($_POST["test_prescription"])){
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
$rowCount = count($_POST["test_prescription"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn,"SELECT * FROM test_prescription WHERE id='" . $_POST["test_prescription"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>id</label></td>
<td><input type="number" name="id[]" class="txtField" value="<?php echo $row[$i]['id']; ?>"></td>
</tr>
<td><label>date</label></td>
<td><input type="date" name="date[]" class="txtField" value="<?php echo $row[$i]['date']; ?>"></td>
</tr>
<td><label>patient</label></td>
<td><input type="text" name="patient[]" class="txtField" value="<?php echo $row[$i]['patient']; ?>"></td>
</tr>
<td><label>nxt_visit</label></td>
<td><input type="date" name="nxt_visit[]" class="txtField" value="<?php echo $row[$i]['nxt_visit']; ?>"></td>
</tr>
<td><label>prescription</label></td>
<td><input type="text" name="prescription[]" class="txtField" value="<?php echo $row[$i]['prescription']; ?>"></td>
</tr>
<td><label>service</label></td>
<td><input type="text" name="service[]" class="txtField" value="<?php echo $row[$i]['service']; ?>"></td>
</tr>
<td><label>doc_id</label></td>
<td><input type="number" name="doc_id[]" class="txtField" value="<?php echo $row[$i]['doc_id']; ?>"></td>
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