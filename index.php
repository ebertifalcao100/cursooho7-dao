<?php

require_once("config.php");

$eberti = new Usuario();

$eberti->loadById(1);

echo $eberti;

/*
$sql = new Sql();

$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);
*/
?>