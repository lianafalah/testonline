<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Proses Pengurutan, Min dan Max</title>
</head>

<body style="margin:25px;">
<?php
    $jumlah_lajur = $_POST["jumlah_lajur"];
    $cari = $_POST["cari"];
    $nilai = array();
    for($i=0; $i<$jumlah_lajur; $i++){
        $nilai[$i] = $_POST["lajur_ke_$i"];
        echo "Lajur ke ".($i+1)." = ".$nilai[$i]."<br />";
    }

  $index=in_array($cari, $nilai);
  if(!empty($index)){

   echo "Output =  True";
  }
  else 
  {
    echo "Output =  False";

  }
    ?>
      
<br /><br />
<a href="index.php">Kembali ke depan</a>
</body>
</html>