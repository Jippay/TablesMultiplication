<?php
//fonction calcul 0 à 10//
$table = $_GET["tables"];
$total = 'Table de multiplication de '.$table.'<br />';
$x=0;

for ($x = 0; $x <= 10; $x++) {
    $total .= $x." X ".$table." = ".$x*$table."<br />";
        
    }

echo $total;
?>