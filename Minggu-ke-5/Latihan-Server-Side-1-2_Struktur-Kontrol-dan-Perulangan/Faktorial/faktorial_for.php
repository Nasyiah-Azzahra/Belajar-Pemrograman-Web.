<html>
<head>
<title>Menghitung Bilangan Faktorial menggunakan For</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
	<?php
		$n = isset($_POST['n']) ? $_POST['n'] : NULL;
		if(isset($_POST['submit']))
		{
			if($n!=NULL)
			{
				$bil = 1;
				for($i=1;$i<=$n;$i++)
				{
					$bil = $bil*$i;
				}
			}
			else
			{
				$bil = 'Bilangan Tidak boleh kosong !';
			}
		}
		date_default_timezone_set('Asia/Jakarta');
		echo '<div class="panel">';
		echo '<center><h1>Menghitung Bilangan Faktorial Menggunakan For</h1></center>';
		echo date("l, d-M-Y H:i:s");
		echo '<hr>';
		echo '<h4>Masukkan Bilangan :</h4>';
		echo '<form action="" method="post">';
		echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
		echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
		echo '</form>';
		
		if((isset($n))and($n!=NULL))
		{
			echo '<h4>Hasil Faktorial :</h4>';
			echo '==> ';
			for($i=1;$i<$n;$i++)
			{
				echo $i.'x';
			}
			echo $n;
			echo '<br/>';
		}
		echo '<h4>Jumlah Faktorial :</h4>';
		echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
		echo '<br><br><hr><br>';
		echo "<center>Nur Nasyi'ah Azzahra (A12.2018.06031)</center>";
		echo '</div>';
	?>
</body>
</html>