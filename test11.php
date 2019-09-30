<!DOCTYPE html>
<html>

        <body>
                <form method = "post">
                        <input type = "textbox" name = "numbers" placeholder = "number" req>
                        <input type = "submit" name = "submit"/>
                </form>

                <?php
                        if(isset($_POST['submit'])){
                                $n = $_POST['numbers'];
				$t = 1;
					if($n > 1 && $n<25){
						for($i = 1; $i <= $n; $i++){
							$t *= $i;
						}
                                		echo "Factorial of a number: ".$t;
					}
					else
						echo "input grater than 25";
                        }
                ?>
        </body>

</html>


