<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["prescription"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM prescription WHERE id='" . $_POST["prescription"][$i] . "'");
}
header("Location:list_user.php");
?>