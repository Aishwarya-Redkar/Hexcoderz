<?php
require("conn.inc.php");

	if(isset($_POST['submit'])){
		$file = $_FILES['file'];

		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

		$fileExt = explode('.',$fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg','jpeg','png','pdf','docx','txt','gif');

		if(in_array($fileActualExt,$allowed)){
				if($fileError == 0){
					if($fileSize < 10000000000)
					{

						$fileNameNew = uniqid('',true).".".$fileActualExt;
					
						$fileDestination = 'uploads/'.$fileNameNew;
				
						move_uploaded_file($fileTmpName, $fileDestination);
						
						$insert=mysql_query("insert into `resources`(`title`,`file_path`)values('$fileNameNew','$fileDestination')");
						if($insert){
						header("Location: index.php?uploadsuccess");
						}
						else{
						die(mysql_error());
						}
				    }
					else
					{
						echo "Your file is to big!!";
					}

				}
				else{
					echo "There was an error uploading your file!";
				}
		}
		else
		{
			echo "You cannot upload the files of this type!";
		}



	}



?>