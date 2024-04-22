<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");
$result = mysqli_query($conn,"SELECT * FROM clinic");
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="../styles.css" />
<script language="javascript" src="../users.js" type="text/javascript"></script>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td></td>
		<td>id</td>
		<td>Dentist id</td>
		<td>State id</td>
		<td>Address</td>
		<td>Phone</td>
		<td>More Information</td>
		<td>Clinic Hours</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><input type="checkbox" name="clinic[]" value="<?php echo $row["id"]; ?>" ></td>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["dentist_id"]; ?></td>
	<td><?php echo $row["clinic_name"]; ?></td>
	<td><?php echo $row["address"]; ?></td>
	<td><?php echo $row["phone"]; ?></td>
	<td><?php echo $row["more_info"]; ?></td>
	<td><?php echo $row["clinic_hours"]; ?></td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
	<td colspan="12">
		<input type="button" name="update" value="Update" onClick="setUpdateAction();" /> 
		<input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" />
	</td>
</tr>
</table>
</form>
</div>
</body></html>