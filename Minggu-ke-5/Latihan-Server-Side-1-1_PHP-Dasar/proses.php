<?php
	if(isset($_POST["proses"]))
		{
			$a = $_POST['a'];
			$b = $_POST['b'];
			$opsi = $_POST['opsi'];
			
			if($opsi=='tambah')
			{
				$c = $a + $b; //rumus pertambahan
				echo"$a + $b = $c";
			}
			else if($opsi=='kurang')
			{
				$c = $a - $b; //rumus pengurangan
				echo"$a - $b = $c";
			}
			else if($opsi=='kali')
			{
				$c = $a * $b; //rumus perkalian
				echo"$a * $b = $c";
			}
			else if($opsi=='bagi')
			{
				$c = $a / $b; //rumus pembagian
				echo"$a / $b = $c";
			}
			else{
				echo"Anda belum memasukkan operasi";
			}
		}
?>