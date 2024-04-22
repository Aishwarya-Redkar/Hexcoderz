<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["test_prescription"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM test_prescription WHERE id='" . $_POST["test_prescription"][$i] . "'");
}
header("Location:list_user.php");
?>