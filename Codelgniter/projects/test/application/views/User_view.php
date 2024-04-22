<?php
//	echo "hi..................";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <table>
 	<tr>
 		<th>
 			User Id
 		</th>
 		<th>
 			UserName
 		</th>
 			<th>
 			Company
 		</th>
 	</tr>

<?php 
		foreach($userArray as $key =>$value) {
		
			echo "<tr>
					<td>".$value->id."</td>
						<td>".$value->username."</td>
							<td>".$value->company."</td>
			</tr>";
		}

?>



 </table>
</body>
</html>

<?php
//echo "<pre>";
//print_r($userArray);
//echo "</pre>";
?>