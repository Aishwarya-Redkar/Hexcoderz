<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["clinic"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM clinic WHERE id='" . $_POST["clinic"][$i] . "'");
}
header("Location:list_user.php");
?>