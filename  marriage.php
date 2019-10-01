<!DOCTYPE html>
<html>
    <head>
    <title>Party menu</title>
    </head>
        <link rel="stylesheet" type="text/css" href="party.css">
    <body>
        <header>
            <a href = "party.php"><h1><span class ="white">party</span><span class = "black">maker</span></h1></a>
            <div class = "about">we organise parties that you will remember!!!</div>
        </header>
        <h1 class = "sub-heading">Marriage Party</h1>
        <form method = "post">
            <table>
                <tr>
                    <th>S.NO.</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <th>1.</th>
                    <td>GoodReach Bread</td>
                    <td>90Rs/Kg</td>
                    <td><input type = "number" name = "P1"/></td>
                </tr>
                <tr>
                    <th>2.</th>
                    <td>Mithoo Bread</td>
                    <td>50Rs/Kg</td>
                    <td><input type = "number" name = "P2"/></td>
                </tr>
                <tr>
                    <th>3.</th>
                    <td>GoodReach Cake</td>
                    <td>570Rs/Kg</td>
                    <td><input type = "number" name = "P3"/></td>
                </tr>
                <tr>
                    <th>4.</th>
                    <td>Mithoo Cake</td>
                    <td>490Rs/Kg</td>
                    <td><input type = "number" name = "P4"/></td>
                </tr>
                <tr>
                    <th>5.</th>
                    <td>Eclairs Toffee</td>
                    <td>90Rs-100pcs</td>
                    <td><input type = "number" name = "P5"/></td>
                </tr>
                <tr>
                    <th>6.</th>
                    <td>Party Popper</td>
                    <td>70Rs</td>
                    <td><input type = "number" name = "P6"/></td>
                </tr>
                <tr>
                    <th>7.</th>
                    <td>Balloons</td>
                    <td>40Rs-20pcs</td>
                    <td><input type = "number" name = "P7"/></td>
                </tr>
                <tr>
                    <th>8.</th>
                    <td>Balloons</td>
                    <td>80Rs-70pcs</td>
                    <td><input type = "number" name = "P8"/></td>
                </tr>
                <tr>
                    <th>9.</th>
                    <td>Ballons</td>
                    <td>180-200pcs</td>
                    <td><input type = "number" name = "P9"/></td>
                </tr>
                <tr>
                    <th>10.</th>
                    <td>Balloons</td>
                    <td>500Rs-590pcs</td>
                    <td><input type = "number" name = "P10"/></td>
                </tr>
                <tr>
                    <th></th>
                    <th>
                        <?php
                            if(isset($_POST['submit'])){
                                $rate = array(90, 50, 570, 490, 90, 70, 40, 80, 180, 500);
                                $sum = 0;
                                $i = 1;
                                foreach($rate as $x){
                                    $str = "P" . $i;
                                    $sum += $x * $_POST[$str];
                                    $i++;
                                }
                                echo "Total : ";
                            echo"
                    </th>
                    <th></th>
                    <th>".$sum."<th>";
                            }
                    ?>
                </tr>
            </table>
            <input type = "submit" name = "submit" value="Calculate"/>
        </form>
        
    </body>
<html>