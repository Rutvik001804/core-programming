<!DOCTYPE html>
<html>
<head>
	<title>Task - 1</title>
</head>
<body>
	<?php
		$n = $_POST['num'];
		$arr = array();

		for ($i=0; $i < $n ; $i++) 
		{
			$a = "val".$i; 
			$val = $_POST[$a];
			array_push($arr, $val);
		}

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