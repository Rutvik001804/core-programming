<!DOCTYPE html>
<html>
<head>
	<title>Task - 3 (Practical - 2)</title>
</head>
<body>
	<form action="practicle-2" method="GET">
		Enter String <br>
		<input type="text" name="str"> <br><br>
		Enter Number to where you have to reverse <br>
		<input type="text" name="num"> <br><br>
		<input type="submit" value="Submit">
	</form>
	<br>
	<?php
		if(isset($_GET["str"]) && isset($_GET["num"]))
		{
			$s = $_GET["str"];
			$n = $_GET["num"];

			$s_length = strlen($s);
			if($s_length >= $n)
			{
				$split_str = str_split($s,$n);
				$l = count($split_str);

				$new_str = "";

				for ($i=0; $i < $l; $i++) 
				{ 
					$str_rev =  strrev($split_str[$i]);

					$new_str = $new_str.$str_rev;
				}

				echo $s." -> ".$new_str;
			}
			else
				echo "Enter Less than of string length";
		}
	?>
</body>
</html>