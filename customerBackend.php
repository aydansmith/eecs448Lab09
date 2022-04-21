<?php
echo("<link href='style2.css' rel='stylesheet' type='text/css'/>");
//access the global array called $_POST to get the values from the text fields
$username = $_POST["username"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];
$chiefs = $_POST["chiefs"];
$royals = $_POST["royals"];
$jayhawks = $_POST["jayhawks"];
echo("<center>");
echo("<div>");
echo "Welcome: " . $username . "<br>";
echo "Your password is: " . $password . "<br><br><br>";


echo "<table id='table1'>";

echo("<tr>");
echo("<th></th>");
echo("<th>Quantity</th>");
echo("<th>Cost Per Item</th>");
echo("<th>Sub Total</th>");
echo("</tr>");

echo("<tr>");
echo("<th>Chiefs Hats</th>");
echo("<td>$chiefs</td>");
echo("<td>$10.00</td>");
echo("<td>$".($chiefs * 10.00)."</td>");
echo("</tr>");

echo("<tr>");
echo("<th>Royals Hats</th>");
echo("<td>$royals</td>");
echo("<td>$15.00</td>");
echo("<td>$".($royals * 15.00)."</td>");
echo("</tr>");

echo("<tr>");
echo("<th>Jayhawk Hats</th>");
echo("<td>$jayhawks</td>");
echo("<td>$20.00</td>");
echo("<td>$".($jayhawks * 20.00)."</td>");
echo("</tr>");

echo("<tr>");
echo("<th>Shipping</th>");
echo("<td colspan='2'>$shipping</td>");
echo("<td>".(getPrice())."</td>");
echo("</tr>");

echo("<tr>");
echo("<th colspan='3'>Total Cost</th>");
echo("<th>$".(($jayhawks * 20.00) + ($royals * 15.00) + ($chiefs * 10.00) + (getPrice2()))."</th>");

echo("</tr>");

echo("</table>");
echo("</div>");
echo("</center>");


function getPrice(){
    if($_POST["shipping"] == "7 day"){
        return("$0");
    }
    if($_POST["shipping"] == "3 day"){
        return("$5");
    }
    if($_POST["shipping"] == "Over Night"){
        return("$50");
    }
}

function getPrice2(){
    if($_POST["shipping"] == "7 day"){
        return(0);
    }
    if($_POST["shipping"] == "3 day"){
        return(5);
    }
    if($_POST["shipping"] == "Over Night"){
        return(50);
    }
}


?>