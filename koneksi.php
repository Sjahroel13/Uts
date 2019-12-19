<?php
$user="root";
$server="localhost";
$password="";
$database="db_uts";

$rumah=mysql_connect($server,$user,$password);
if($rumah){
	echo 'Home Berhasil Terhubung'.",&nbsp";
}else{
	echo 'Cek Lagi!!';
}
$db=mysql_select_db($database);
if($db){
	echo 'DB Berhasil Terhubung'.",&nbsp";
}else{
	echo 'Cek Lagi!!';
}
?>