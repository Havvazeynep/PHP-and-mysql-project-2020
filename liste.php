<?php include("sqlbaglanti.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="description" content="Sıfırdan Web Tasarım Projesi - Havva Zeynep Akdemir">
    <meta name="author" content="https://github.com/Havvazeynep , havvazeynepakdemir@gmail.com">
    <meta name="keywords" content="HTML CSS JS Javascript Web Tasarım SQL mysql PHP">
</head>
<body>
<?php
  	$q = intval($_GET['q']);
  	$sql = "select m.Ad ,m.Soyad, sf.SeferAdi, sf.KalkisTarihi, sf.KalkisZamani, b.BiletID from seferler AS sf inner join biletler as b on b.SeferID = sf.SeferID inner join musteriler as m on m.MusteriTC = b.MusteriTC where b.BiletID = '".$q."'";
    $sorgu = $conne->query($sql , PDO::FETCH_ASSOC);
    if ($sorgu->rowCount() == 0) {
    	echo "<center>SONUÇ BULUNAMADI</center>";
    } else {
        echo "<table>
        	<tr>
    		<th>İsminiz</th>
			<th>Seferiniz</th>
    		<th>Sefer Tarihi</th>
    		<th>Sefer Saati</th>
    		<th>Bilet İptal</th>
	  		</tr>";
    }
    foreach($sorgu->fetchAll() as $sonuc) {
 		echo '<tr>
 			<td>'.$sonuc["Ad"].' '.$sonuc["Soyad"].'</td>
        	<td>'.$sonuc["SeferAdi"].'</td>
        	<td>'.$sonuc["KalkisTarihi"].'</td>
        	<td>'.$sonuc["KalkisZamani"].'</td>
        	<td><center><a href="sil.php?id='.$sonuc["BiletID"].'">İPTAL ET</a></center></td>
 			</tr>';
 	}echo "</table>";
							
?>
</body>
</html>