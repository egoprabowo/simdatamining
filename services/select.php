<?php 
	include "koneksi.php";
	
	$query = mysql_query("SELECT * FROM pengguna ORDER BY Username ASC");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);
	
?>