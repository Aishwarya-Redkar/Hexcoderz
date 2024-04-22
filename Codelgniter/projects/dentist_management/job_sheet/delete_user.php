<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["job_sheet"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM job_sheet WHERE id='" . $_POST["job_sheet"][$i] . "'");
}
header("Location:list_user.php");
?>