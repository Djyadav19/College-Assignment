/*the 
1.wap to find the factorial of a given no .The number provided shall be less than 2.
2.wap to find out the age of a person while he /she provide his/her date of birth in the format of DD-MON-YEAR.gREET HIM/HEr with age in years and months ob_list_handlers
3. wap to check the format of email entered by the user and password shall be strong including 2 upper, 2 lower ,2 number and 2 special charater.
*/
<!DOCTYPE html>
<html>

        <body>
                <form method = "post">
                        <input type = "textbox" name = "numbers" placeholder = "dd/mm/year" req>
                        <input type = "submit" name = "submit"/>
                </form>
                <?php
                        if(isset($_POST['submit'])){
                                $arr = explode('/',$_POST['numbers']);
                                        echo  " hello sir: " . (2019-$arr[2])." year" .(12-$arr[1]). "month<br>";
                        }
                ?>
        </body>

</html>

