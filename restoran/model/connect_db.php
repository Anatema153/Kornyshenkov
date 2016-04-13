<?php
// Соединение с сервером
$link=mysql_connect("localhost","root","") or die ("No connect");

// Выбор базы данных
$db=mysql_select_db("restoran") or die ("No database");

// Кодировка
mysql_query("SET NAMES utf8")
?>