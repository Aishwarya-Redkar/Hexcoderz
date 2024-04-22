<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["invoice"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM invoice WHERE id='" . $_POST["invoice"][$i] . "'");
}
header("Location:list_user.php");
?>