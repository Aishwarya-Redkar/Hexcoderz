<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["department"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM department WHERE id='" . $_POST["department"][$i] . "'");
}
header("Location:list_user.php");
?>