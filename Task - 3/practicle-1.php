<!DOCTYPE html>
<html>
<head>
	<title>Task - 3 (Practical - 1)</title>
</head>
<body>
	<form action="practicle-1" method="GET">
		Enter String <br>
		<input type="text" name="str"> <br><br>
		<input type="submit" value="Submit">
	</form>
	<br>
	<?php
		if(isset($_GET["str"]))
		{
			$s = $_GET["str"];


			$split_str = str_split($s,2);
			$l = count($split_str);

			$new_str = "";

			for ($i=0; $i < $l; $i++) 
			{ 
				$str_rev =  strrev($split_str[$i]);

				$new_str = $new_str.$str_rev;
			}

			echo $s." -> ".$new_str;
		}
	?>
</body>
</html>