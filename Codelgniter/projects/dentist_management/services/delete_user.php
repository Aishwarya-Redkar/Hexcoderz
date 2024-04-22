<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["services"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM services WHERE id='" . $_POST["services"][$i] . "'");
}
header("Location:list_user.php");
?>