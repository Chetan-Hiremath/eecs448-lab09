<!DOCTYPE html>
<html>
  <body>
<style>
table, th, td {
  text-align: center;
}
b1 {
   font-weight: bold;
   font-size: 20px;
}
</style>
<?php 
$email = $_POST["email"]; 
$password = $_POST["password"]; 
$chair = $_POST["number1"]; 
$television = $_POST["number2"];
$icecream = $_POST["number3"]; 
$option = $_POST["options"];
$chairtotal = $chair * 10;
$televisiontotal = $television * 5;
$icecreamtotal = $icecream * 15;
$shippingcost = 0;
if ($option == "7 Days") 
{ 
  $shippingcost = 0;
}
else if ($option == "Overnight") 
{ 
  $shippingcost = 50;
}
else if ($option == "3-Day") 
{ 
  $shippingcost = 5;
}
$totalcost = $chairtotal + $televisiontotal + $icecreamtotal + $shippingcost;
if($chairtotal == 0 && $televisiontotal == 0 && $icecreamtotal == 0)
{
  $shippingcost = 0;
  $totalcost = 0;
}
echo "<h1>Welcome, " . $email . "</h1>";
echo "<p><b>Your Password is: " . $password . "</b></p>";
echo "<p><b1>Your Receipt: </b1></p>";
echo "<table border='2' style='width:500px'>";
  echo "<tr style='height:50px'>";
    echo "<th></th>";
    echo "<th>Quantity</th>";
    echo "<th>Cost Per Item</td>";
    echo "<th>Sub Total</td>";
  echo "</tr>";
  echo "<tr style='height:50px'>";
    echo "<th>Chairs</th>";
    echo "<td>$chair</td>";
    echo "<td>$10.00</td>";
    echo "<td>$$chairtotal</td>";
  echo "</tr>";
  echo "<tr style='height:50px'>";
    echo "<th>TVs</th>";
    echo "<td>$television</td>";
    echo "<td>$5.00</td>";
    echo "<td>$$televisiontotal</td>";
  echo "</tr>";
  echo "<tr style='height:50px'>";
    echo "<th>Ice Creams</th>";
    echo "<td>$icecream</td>";
    echo "<td>$15.00</td>";
    echo "<td>$$icecreamtotal</td>";
  echo "</tr>";
  echo "<tr style='height:50px'>";
    echo "<th>Shipping</th>";
    echo "<th colspan='2'>$option</th>";
    echo "<td>$$shippingcost</td>";
  echo "</tr>";
  echo "<tr style='height:50px'>";
    echo "<th colspan='3'>Total Cost</th>";
    echo "<td>$$totalcost</td>";
  echo "</tr>";
echo "</table>";
?> 
  </body>
</html>
