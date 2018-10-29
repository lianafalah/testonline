<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Proses Pengurutan, Min dan Max</title>
</head>

<body style="margin:25px;">
<?php
    $jumlah_lajur = $_POST["jumlah_lajur"];
    $nilai = array();
    for($i=0; $i<$jumlah_lajur; $i++){
        $nilai[$i] = $_POST["lajur_ke_$i"];
        echo "Lajur ke ".($i+1)." = ".$nilai[$i]."<br />";
    }
    rsort($nilai); 

  echo 'Output = '.$nilai[1];
    
   
    
?>
<br /><br />
<a href="index.php">Kembali ke depan</a>
</body>
</html>