<?php
$conn = mysql_connect("localhost","root","");
mysqli__select_db($conn,"dentist_management");
$rowCount = count($_POST["documents"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query("DELETE FROM documents WHERE id='" . $_POST["documents"][$i] . "'");
}
header("Location:list_user.php");
?>