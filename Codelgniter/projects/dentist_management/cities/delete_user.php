<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["cities"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM cities WHERE city_id='" . $_POST["cities"][$i] . "'");
}
header("Location:list_user.php");
?>