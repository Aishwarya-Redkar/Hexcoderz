<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["login"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM login WHERE id='" . $_POST["login"][$i] . "'");
}
header("Location:list_user.php");
?>