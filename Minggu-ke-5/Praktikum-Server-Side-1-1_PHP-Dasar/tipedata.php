<?php
	$nim = 'A12.2018.06031';
	$nama = "Nur Nasyi'ah Azzahra";
	$umur = 20;
	$nilai = 99.75;
	$status = TRUE;
	echo "NIM : " . $nim . "<br>";
	echo "Nama : $nama<br>";
	print "Umur : " . $umur; print "<br>";
	printf ("Nilai : %.2f<br>", $nilai);
	if ($status)
		echo "Status : Aktif";
	else
		echo "Status : Tidak Aktif";
?>