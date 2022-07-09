<!DOCTYPE html>
<html>
    <head>
        <title>asteriks calculator</title>
    </head>
    <body>
    <?php
    ini_set('display_errors',0);
            
        if( isset( $_REQUEST['Draw A Table'] ))
        {
        $operator=$_REQUEST['operator'];
        $number1 = $_REQUEST['first_value'];
        $number2 = $_REQUEST['second_value'];
        $asteriks = "*"

        for ($i = 0; $i < $number1; $i++) {
                echo strlen(asteriks) * $number
            for ($j = 0; $j < $number2; $j++) {
               print_r(array_map(strlen($asteriks) * $number2 "<br>"))
            }
            echo "\n";
          }
                
        if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
            {
            echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
            }
        }

        <form>
                <table style="border:groove #00FF99">
                
                <tr>
                    <td style="background-color:aliceblue; color:black; font-family:'sans serif'">Enter Number</td>
                    <td colspan="1">
                    <input name="first_value" type="text" style="color:grey"/></td>
                </tr>
                
                <tr>
                    <td style="background-color:alicblue; color:black; font-family:'sans serif'">Enter Number</td>
                    <td class="auto-style5">
                    <input name="second_value" type="text"  style="color:grey"/></td> 
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>	 
                </tr>
                
                <tr>
                    <td style="background-color:alicblue;color:black">Output = </td>
                    <td style="color:darkblue"><?php echo $res;?></td>
                </tr>	
                
                </table>
        </form>
    ?>
    </body>
</html>



// Asteriks multiplication table    #first draft
// Codeweekend H.W. 
// Programmer: Murtaza Kafka