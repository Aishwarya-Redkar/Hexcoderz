<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["users_groups"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM users_groups WHERE id='" . $_POST["users_groups"][$i] . "'");
}
header("Location:list_user.php");
?>