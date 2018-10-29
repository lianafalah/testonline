<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Proses Array 1 Dimensi</title>
</head>

<body style="margin:25px;">
    <form action="proses_min_max.php" method="post">
<?php 
    $jumlah_lajur = $_POST["jumlah_lajur"];
    for($i=0; $i<$jumlah_lajur; $i++){
?>
    Lajur ke <?php echo $i+1; ?> = <input type="text" name="lajur_ke_<?php echo $i; ?>" size="2" /><br /><br />
<?php
    }
?>
    <input type="hidden" value="<?php echo $jumlah_lajur; ?>" name="jumlah_lajur" />
    <input type="submit" />
    </form>
</body>
</html>