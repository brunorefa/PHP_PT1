<?php

require_once("config.php");
$sql = new Sql();
$sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
print_r($usuarios);

?>