<!DOCTYPE html>
<html>

	<body>
		<form method = "post">
			<input type = "textbox" name = "numbers" placeholder = "EVEN/ODD" required/>
			<input type = "submit" name = "submit"/>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$arr = explode(' ',$_POST['numbers']);
				foreach($arr as $i){
					echo $i . " : " . (($i%2 == 0)?"even":"odd") . "<br>";
				}
			}
		?>
	</body>

</html>
