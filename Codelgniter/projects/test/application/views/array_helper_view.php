<!DOCTYPE html>
<html>
<head>
	<title>This is the title of my page</title>
</head>
<body>
<?php
	echo "<pre> SEO Array";
	print_r($seo);
?>

<p>1. element()</p>
<?php
	echo element("meta_desc",$seo);
?>

<p>2. random_element()</p>
<?php
	echo random_element($seo);
?>

<p>3. elements()</p>
<?php
	$new_array = elements(array("meta_desc","meta_key"),$seo);
	print_r($new_array);
?>

</body>
</html>