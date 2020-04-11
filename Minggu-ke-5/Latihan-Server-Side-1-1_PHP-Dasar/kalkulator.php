<html>
<head>
	<title>Kalkulator</title>
	<link rel="stylesheet" type= "text/css" href="style.css">
</head>
<body>

<form method="post" action="kalkulator.php" class="form">
	<h1>KALKULATOR</h1>
	<p>create by Nur Nasyi'ah Azzahra (A12.2018.06031)</p>
	<input type="text" name="a" placeholder="Masukkan Bilangan Pertama" id= "input">
	<input type="text" name="b" placeholder="Masukkan Bilangan Kedua" id= "input">
	<select name="opsi" class="select">
		<option name="opsi" >--Pilih Operasi--</option>
		<option name="opsi" value="tambah">Tambah (+)</option>
		<option name="opsi" value="kurang">Kurang (-)</option>
		<option name="opsi" value="kali">Kali (*)</option>
		<option name="opsi" value="bagi">Bagi (/)</option>
	</select>
	
	<input type = "submit" name = "proses" value = "Hitung" id = "input">

	<div class = "hasil">
		<?php include"proses.php"; ?>
	</div>
<form>

</body>
</html>