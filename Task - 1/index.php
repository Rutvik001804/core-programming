<!DOCTYPE html>
<html>
<head>
	<title>Task - 1</title>
</head>
<body>
	<form action="." method="GET">
		Enter the Number <br>
		<input type="text" name="num"> <br><br>
		<input type="submit" value="Submit">
	</form>
	<br>
	<?php
		if(isset($_GET["num"]))
		{
			$n = $_GET["num"];

			if($n > 0)
			{
				?>
				<form action="max.php" method="post">
					<?php
					for ($i=0; $i < $n ; $i++) 
					{
						$a = $i+1;
						echo "Value".$a."<br>";
						?>
						<input type="text" name="val<?php echo $i; ?>"> <br><br>
						<?php
					}
					?>
					<input type="hidden" name="num" value="<?php echo $n; ?>">
					<input type="submit" value="Calculate Max Number">
				</form>
				<?php
			}
			else
				echo "Enter Greater than 0 Number";
		}
	?>
</body>
</html>