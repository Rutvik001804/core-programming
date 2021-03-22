<!DOCTYPE html>
<html>
<head>
	<title>Task - 2</title>
</head>
<body>
	<?php
		$val = $_POST["val"];

		$arr = explode(",", $val);

		print_r($arr);

		$l = count($arr);
		$max = $arr[0];
		for ($i=1; $i < $l ; $i++) 
		{ 
			if($arr[$i] > $max)
				$max = $arr[$i];
		}
	?>
	<h1>Largest Number is : <?php echo $max ?></h1>
</body>
</html>