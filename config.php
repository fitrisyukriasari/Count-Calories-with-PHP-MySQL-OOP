<?php  
$koneksi=mysql_connect("localhost","root","");
$db=mysql_select_db("makanan");
if ($db) {
}else{
	echo "Tidak Terkoneksi";
}
?>