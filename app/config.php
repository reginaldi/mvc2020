<?php
//configuração bando de dados local
//padrao: nome da constante maiusculo e depois o nome da referencia
define("HOST", "den1.mysql5.gear.host");
define("USER", "bancobom");
define("PASSW", "Ew7Y!!W3HeD4");
define("DATABASE", "bancobom");
'options' => [
 PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_CASE => PDO::CASE_NATURAL,
 PDO::ATTR_EMULATE_PREPARES, false
 ],

define("ROOT", "qualquersite123.000webhostapp.com");
define("ASSETS", "/app/views/assets");

