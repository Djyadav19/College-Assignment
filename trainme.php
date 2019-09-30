<!DOCTYPE html>
<html>
    </head>
        <b>IRCTC</b>
        <link rel="stylesheet" type="text/css" href="train.css">
    </head>
    <body>
        <form method="POST">
            <h1><div class = "Heading">BOOK </div> your ticket<br>
            <select name ="From" required>
                <option value=""> From* </option>
                <option value="DDN">DEHRADUN-DDN </option>
                <option value="NDLS">NEW DELHI - NDLS</option>
                <option vlaue="HW">HARIDWAR JN - HW</option>
                <option value="INDB">INDORE JN BG - INDB</option>
                <option value="MAS">MGR CHENNAI CTL - MAS</option>
            </select>
            <select name ="To" required>
                <option value="">To* </option>
                <option value="DDN">DEHRADUN-DDN </option>
                <option value="NDLS">NEW DELHI - NDLS</option>
                <option vlaue="HW">HARIDWAR JN - HW</option>
                <option value="INDB">INDORE JN BG - INDB</option>
                <option value="MAS">MGR CHENNAI CTL - MAS</option>
            </select><br>
            <input type="date"required/><br>
            <select name ="All Classes" >
                <option value="">All Classes </option>
                <option value="SL">Sleeper (SL) </option>
                <option value="3A">AC 3 Tier</option>
                <option vlaue="2A"> AC 2 Tier</option>
                <option value="1A">AC 1 tier</option>
            </select>
            <input type="submit" name="submit" value="Find Trains" /><br>
            
        </form>

        <?php
            if(isset($_POST['submit'])){
                    $a= $_POST['From'];
                    $b= $_POST['To'];
                    error_reporting(E_ERROR | E_PARSE);
                    echo "<h1>Trains $a to $b are:-</h1>";
                    switch($a){	case 'DDN':
                                if($b== 'NDLS'){
                                    echo "<ul>";
                                    echo "<li> <a href='Dehradun_satabdi.php'>Dehradun Satabdi</a> <br> </li>";
                                    echo "<li><a href='New_Delhi_Janshatabdi.php'>New Delhi Janshatabdi</a> <br> </li>";
                                    echo "<li><a href='Old_Mussoorie_Express.php'>Old Mussoorie Express </a> <br> </li> ";
                                    echo "</ul>";
                                    }
                                else if($b== 'HW'){
                                    echo "<ul>";
                                    echo "<li> <a href='Mussoorie_Express.php'>Mussoorie Express</a> <br> </li>";
                                    echo "<li><a href='Dehradun_Express.php'>Dehradun Express</a> <br> </li>";
                                    echo "<li><a href='Doon_Express.php'>Doon Express </a> <br> </li> ";
                                    echo "</ul>";
                                    }	
                                else if($b== 'INDB'){
                                    echo "<ul>";
                                    echo "<li> <a href='Dehradun_Indore_BG_Express.php'>Dehradun Indore BG Express</a> <br> </li>";
                                    echo "</ul>";
                                    
                                    }
                                else{
                                    echo"<h2> Trains are not added in the data base for $a to $b </h2>"."<BR><H1>COMING SOON</H1>";
                                    }
                            break;
                            case 'NDLS':
                                if($b== 'DDN')
                                    {
                                    echo "<ul>";
                                    echo "<li> <a href='Nanda_Devi_Express.php'>Nanda Devi Express</a> <br> </li>";
                                    echo "<li><a href='Dehradun_Satabdi_b.php'>Dehradun Satabdi</a> <br> </li>";
                                    echo "</ul>";
                                    }
                                else if($b== 'HW')
                                    {
                                    echo "<ul>";	
                                    echo "<li> <a href='Dehradun_Janshatabdi.php'>Dehradun Janshatabdi</a> <br> </li>";
                                    echo "</ul>";
                                    
                                    }
                                else if($b== 'MAS')
                                    {
                                    echo "<ul>";
                                    echo "<li> <a href='Tamil_Nadu_Express.php'>Tamil Nadu Express</a> <br> </li>";
                                    echo "</ul>";
                                    
                                    }
                                
                                else{
                                        echo"<h2> Trains are not added in the data base for $a to $b </h2>"."<BR><H1>COMING SOON</H1>";
                                    }
                            break;
                        default:
                            echo "no trains";
                        }
                }
                
            ?>
     <body>
<html>