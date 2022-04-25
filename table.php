<!DOCTYPE html>
<html>
<body>
<?php
echo "<table border =\"5\" style='border-collapse: collapse'>"; 
        echo "<td style='font-weight: bold;'>X</td> \n";
        for ($y=1; $y <= 100; $y++) 
        {
            echo "<td style='font-weight: bold;'>$y</td> \n";
        }
    echo "</tr>";
    for ($x=1; $x <= 100; $x++) 
    {  
        echo "<td style='font-weight: bold;'>$x</td>";
        for ($y=1; $y <= 100; $y++) 
        {
            $multiply = $x * $y; 
            echo "<td>$multiply</td> \n";
        }
        echo "</tr>";
    }
echo "</table>"; 
?>
</body>
</html> 
