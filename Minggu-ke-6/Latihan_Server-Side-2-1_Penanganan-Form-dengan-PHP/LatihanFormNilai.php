<html>
<head>
	<title>Latihan Form Nilai dengan PHP</title>
	 <link rel="stylesheet" href="style.css"> 
</head>
<body>
	<form action="proses.php" method="post">
		<table class="table">
			<tr>
				<td><label>NIM</label></td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td><label>Program Studi</label></td>
				<td>
					<select name="prodi">
						<option value="Teknik Informatika S1">Teknik Informatika S1</option>
						<option value="Sistem Informasi S1">Sistem Informasi S1</option>
						<option value="Teknik Informatika D3">Teknik Informatika D3</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Nilai Tugas</label></td>
				<td><input type="number" name="nilai_tugas" min='0' max='100' placeholder="0-100" required></td>
			</tr>
			<tr>
				<td><label>Nilai UTS</label></td>
				<td><input type="number" name="nilai_uts" min='0' max='100' placeholder="0-100" required></td>
			</tr>
			<tr>
				<td><label>Nilai UAS</label></td>
				<td><input type="number" name="nilai_uas" min='0' max='100' placeholder="0-100" required></td>
			</tr>
			<tr>
				<td><label>Catatan Khusus</label></td>
				<td>
					<p><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%</p>
					<p><input type="checkbox" name="catatan[]" value="Interaktif di kelas" />Interaktif Di Kelas</p>
					<p><input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas</p>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit">Simpan</button></td>
			</tr>
		</table>
	</form>
</body>
</html>