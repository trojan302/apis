<?php

$json = file_get_contents('http://ratnalinux/tutorial/data/user/555');
$obj = json_decode($json);

for ($i=0; $i < count($obj); $i++) { 
	
	echo "<div style='border:1px solid black;margin:10px auto;padding:10px;'>";
	echo "<b>". $obj[$i]->{'first_name'} ." " . $obj[$i]->{'last_name'} ."</b><br>";
	echo "Jalan  : ". $obj[$i]->{'st_address'} ."<br>";
	echo "Kota : ". $obj[$i]->{'ct_address'} ."<br>";
	echo "Negara : ". $obj[$i]->{'con_address'} ."<br>";
	echo "IP : ". $obj[$i]->{'ip_address'} ."<br>";
	echo "</div>";

}

?>