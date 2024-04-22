<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM users WHERE id='" . $_POST["users"][$i] . "'");
}
header("Location:list_user.php");
?>