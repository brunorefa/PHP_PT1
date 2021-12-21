<?php
function incluirClasses($nomeClasse) {
    $caminho = "abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php";
    if(file_exists($caminho))
    require_once($caminho);
    else
    require_once($nomeClasse . ".php");
    }
    spl_autoload_register("incluirClasses"); 

$carro = new Delrey();
$carro->acelerar(80); 
?>
