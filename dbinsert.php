<?
@mysql_connect("localhost", "root", "") or
die ("Не могу подключиться к	серверу!"); 
mysql_select_db("dostavka") or
die ("K baze ne podklychilsya!");
?>