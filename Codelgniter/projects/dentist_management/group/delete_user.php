<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["group"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM group WHERE id='" . $_POST["group"][$i] . "'");
}
header("Location:list_user.php");
?>