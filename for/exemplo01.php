<?php
$salario = 200;

for ($i = $salario; $i <=300; $i = $i + 10) {
    if($i < 300 && $i *0.7) {
        echo $i."<br>";
    } 
    else if ($i > 301 && $i *0.5) {
        echo $i;
    }
}
    
 

?>