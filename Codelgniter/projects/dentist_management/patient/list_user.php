<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dentist_management");
$result = mysqli_query($conn,"SELECT * FROM patient");
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
		<td>ID</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Adhaar No.</td>
		<td>Phone</td>
		<td>Gender</td>
		<td>Email</td>
		<td>Password</td>
		<td>City</td>
		<td>State</td>
		<td>Pin</td>
		<td>Country</td>
		<td>Address</td>
		<td>Clinic Name</td>
		<td>Status</td>
		<td>Date</td>
		<td>Check</td>


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
	<td><input type="checkbox" name="patient[]" value="<?php echo $row["id"]; ?>" ></td>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["fname"]; ?></td>
	<td><?php echo $row["lname"]; ?></td>
	<td><?php echo $row["adhar_no"]; ?></td>
	<td><?php echo $row["phone"]; ?></td>
	<td><?php echo $row["gender"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["password"]; ?></td>
	<td><?php echo $row["city"]; ?></td>
	<td><?php echo $row["state"]; ?></td>
	<td><?php echo $row["pin"]; ?></td>
	<td><?php echo $row["country"]; ?></td>
	<td><?php echo $row["address"]; ?></td>
	<td><?php echo $row["clinic_name"]; ?></td>
	<td><?php echo $row["status"]; ?></td>
	<td><?php echo $row["date"]; ?></td>
	<td><?php echo $row["check"]; ?></td>

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