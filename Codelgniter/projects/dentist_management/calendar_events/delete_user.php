<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["calendar_events"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM calendar_events WHERE ID='" . $_POST["calendar_events"][$i] . "'");
}
header("Location:list_user.php");
?>