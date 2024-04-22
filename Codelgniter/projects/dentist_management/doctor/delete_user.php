<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["doctor"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM doctor WHERE id='" . $_POST["doctor"][$i] . "'");
}
header("Location:list_user.php");
?>