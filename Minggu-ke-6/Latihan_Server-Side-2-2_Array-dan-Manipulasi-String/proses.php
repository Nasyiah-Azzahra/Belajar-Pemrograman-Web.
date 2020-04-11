<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hasil Tabel</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        $nilai_akhir = (0.4 * $nilai_tugas) + (0.3 * $nilai_uts) + (0.3 * $nilai_uas);
        if ($nilai_akhir > 84) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 70) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 60) {
            $status = 'lulus';
        } elseif ($nilai_akhir > 50) {
            $status = 'Tidak Lulus';
        } else {
            $status = "Tidak Lulus";
        }

        $selected_catatan = array();
        if (!empty($_POST['catatan'])) {
            foreach ($_POST['catatan'] as $catatan) {
                array_push($selected_catatan, $catatan);
            }
        }
    ?>
        <table border=2 style='border-collapse:collapse;'>
            <thead style='background-color:#3fa999; color: #fff;'>
                <tr>
                    <th style='padding:15px;'>Program Studi</th>
                    <th style='padding:15px;'>NIM</th>
                    <th style='padding:15px;'>Nilai AKhir</th>
                    <th style='padding:15px;'>Status</th>
                    <th style='padding:15px;'>Catatan Khusus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style='padding:15px;'><?= $prodi ?></td>
                    <td style='padding:15px;'><?= $nim ?></td>
                    <td style='padding:15px;'><?= $nilai_akhir ?></td>
                    <td style='padding:15px;'><?= $status ?></td>
                    <td style='padding:15px;'>
                        <?php
                        foreach ($selected_catatan as $catatan_data) {
                            echo $catatan_data . "<br>";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

    <?php
    }
    ?>
</body>

</html>