<?php 
function connection() { 
	$mysql_server = "hwang.pl"; 
    $mysql_admin = "iza"; 
    $mysql_pass = "kochamize"; 
    $mysql_db = "produkty"; 
    @mysql_connect($mysql_server, $mysql_admin, $mysql_pass) 
    or die('Brak połączenia z serwerem MySQL.'); 
    @mysql_select_db($mysql_db) 
    or die('Błąd wyboru bazy danych.'); 
} 

?>