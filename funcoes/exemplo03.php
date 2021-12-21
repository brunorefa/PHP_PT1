<?php

function ola($texto="mundo", $periodo){
    echo "Olá $texto! $periodo <br>";
}
echo ola("mundo",  "bomdia");
echo ola("", "Boa Noite");
echo ola("Bruno", "Boa tarde");
echo ola("joao", "");
?>