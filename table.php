<!DOCTYPE html>
<html>
<body>
<?php
echo "<table border =\"1\" style='border-collapse: collapse'>"; 
    echo "<tr style='font-weight: bold;'>";
        echo "<td >X</td> \n";
        for ($y=1; $y <= 100; $y++) 
        {
            echo "<td>$y</td> \n";
        }
    echo "</tr>";
    for ($x=1; $x <= 100; $x++) 
    {  
        echo "<tr> \n";
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
