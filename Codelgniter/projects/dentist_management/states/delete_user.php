<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["states"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM states WHERE state_id='" . $_POST["states"][$i] . "'");
}
header("Location:list_user.php");
?>