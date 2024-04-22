<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["countries"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM countries WHERE country_id='" . $_POST["countries"][$i] . "'");
}
header("Location:list_user.php");
?>