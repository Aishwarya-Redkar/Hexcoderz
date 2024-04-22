<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["user_id"]);
for($i=0;$i<$usersCount;$i++) {
$result=mysqli_query($conn,"UPDATE invoice set user_id='" . $_POST["user_id"][$i] . "', doc_id='" . $_POST["doc_id"][$i] . "', job_title='" . $_POST["job_title"][$i] . "', job_desc='" . $_POST["job_desc"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");
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
if (!isset($_POST["invoice"])){
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
$rowCount = count($_POST["invoice"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn,"SELECT * FROM invoice WHERE id='" . $_POST["invoice"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>id</label></td>
<td><input type="number" name="id[]" class="txtField" value="<?php echo $row[$i]['id']; ?>"></td>
</tr>
<td><label>user_id</label></td>
<td><input type="number" name="user_id[]" class="txtField" value="<?php echo $row[$i]['user_id']; ?>"></td>
</tr>
<td><label>doc_id</label></td>
<td><input type="number" name="doc_id[]" class="txtField" value="<?php echo $row[$i]['doc_id']; ?>"></td>
</tr>
<td><label>job_title</label></td>
<td><input type="text" name="job_title[]" class="txtField" value="<?php echo $row[$i]['job_title']; ?>"></td>
</tr>
<td><label>job_desc</label></td>
<td><input type="text" name="job_desc[]" class="txtField" value="<?php echo $row[$i]['job_desc']; ?>"></td>
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