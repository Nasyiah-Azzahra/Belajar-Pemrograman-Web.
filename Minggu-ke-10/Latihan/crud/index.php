
<?php
	include 'library.php';
	include 'conf.php'; 
	$lib = new Library();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO RRUDSRUD</title>
    <link rel="stylesheet" type="text/css" href="assets/css/css.css">
</head>
<body>
    <div class="top-gray"></div> 
        <div class="header"> 
            <div class="big-logo">Latihan CRUDSRUD</div> 
            <?php include 'menu.php';?> 
        </div>
        <div class="content"><div class="container"> 
        <?php
        if(!is_null(get('p'))){ 
            switch (get('p')) { 
                case 'home': 
                    inc('home'); 
                    break;
                case 'sekolah':
                    switch (get('m')) { 
                        case 'home': 
                        inc('tampilan/sekolah/all');
                        break; 
                        case 'add': 
                        inc('tampilan/sekolah/add'); 
                        break;
                        case 'edit': 
                        inc('tampilan/sekolah/edit'); 
                        break; 
                    default:
                    inc('tampilan/sekolah/all'); 
                    break; 
            } 
            break;
            default: 
                inc('home'); 
                break; 
            } 
            }else{ inc('home'); } ?> 
        </div></div>
</body>
</html>