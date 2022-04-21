<?php
echo "<table id='table1'>";

echo("<tr>");
echo("<th></th>");
for($i=1; $i<=100; $i++){
    echo("<th>$i</th>");
}
echo("</tr>");
for($i=1; $i<=100; $i++){
    echo("<tr>");
    echo("<th>$i</th>");
    for($j=1; $j<=100; $j++){
        echo("<td>".($i*$j)."</td>");
    }
    echo("</tr>");
}
echo("</table>");


echo("<style>");
echo("table, td, tr, th{border: 1px solid black}");
echo("</style>")

?>

