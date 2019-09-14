<?php 

function getName($n) { 
	$characters = '0123456789abcdefghijklmnopqrstuvwxyz'; 
	$randomString = ''; 

	for ($i = 0; $i < $n; $i++) { 
		$index = rand(0, strlen($characters) - 1); 
		$randomString .= $characters[$index]; 
	} 

	return $randomString; 
}

function cetak($jumlah) {
    for ($i = 0; $i < $jumlah; $i++) {
        echo getName(32);
        echo "\r\n";
    }
}

cetak(3);
?> 