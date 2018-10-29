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
        $max=$max2=0;
	for ($i = 0; $i < count($nilai); $i++) {
	if ($nilai[$i] > $max) {
	    $max2 = $max;
	    $max = $nilai[$i];
	} else if (($nilai[$i] > $max2) && ($nilai[$i] != $max)) {
	    $max2 = $nilai[$i];
	}
	}
echo "Output: " . $max2 . "<br/>"; 
 
    
    
   
    
?>
<br /><br />
<a href="index.php">Kembali ke depan</a>
</body>
</html>