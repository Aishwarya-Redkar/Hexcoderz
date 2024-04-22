<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
require("conn.inc.php");
$res=mysql_query("select * from resources");
echo "<table>";
while($row=mysql_fetch_array($res))
{
	echo "<tr>";
	echo "<td>";

	echo $row["title"];


	echo "</td>";
	echo "<td>";


	?> <a href="<?php echo $row["file_path"]; ?>">Download</a><?php
	echo "</td>";
	echo "</tr>";  


}
echo "</table>";

?>
</body>
</html>