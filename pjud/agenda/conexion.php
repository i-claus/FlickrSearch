<?php
$link = mysql_connect("localhost","saus_user","sistemasaus");
if(!$link)  //verifica si se conecto o no a la base dato
{
	echo("no se ha podido realizar la conexion a bd". mysql_error());
}
mysql_select_db("sys_pjud",$link);
?>