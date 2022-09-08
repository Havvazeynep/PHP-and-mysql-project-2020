<?php include("sqlbaglanti.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>SEFERLER</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta name="description" content="Sıfırdan Web Tasarım Projesi - Havva Zeynep Akdemir">
    <meta name="author" content="https://github.com/Havvazeynep , havvazeynepakdemir@gmail.com">
    <meta name="keywords" content="HTML CSS JS Javascript Web Tasarım SQL mysql PHP">
</head>
<body>
<div id="header">
	<div id="anamenu">
		<ul id="menu">
        	<li><a href="anasayfa.php">ANA SAYFA</a></li>
        	<li><a href="hakkimizda.php">HAKKIMIZDA</a></li>
        	<li><a href="biletal.php">BİLET AL</a></li>
        	<li><a href="biletsorgulama.php">BİLET SORGULAMA</a></li>
        	<li><a href="iletisim.php">İLETİŞİM</a></li>
    	</ul>
	</div>
</div>
<?php
	if (isset($_POST['gonder'])){
		$kalkis_sehir = $_POST['kalkis_sehir'];
		$varis_sehir = $_POST['varis_sehir'];
		$tarih = $_POST['tarih'];
	
	$sql = "select SeferID, SeferAdi , KalkisTarihi , KalkisZamani , TahminiSure from seferler where KalkisSehirID = '$kalkis_sehir' && VarisSehirID = '$varis_sehir' && KalkisTarihi = '$tarih'";
    $sorgu = $conne->query($sql);
    if ($sorgu->rowCount() == 0) {
    	echo "<center><h1 id='uyari'>Sefer bulunamadı lütfen geçerli bir tarih seçiniz.</h1></center>";
    } else {
        echo "<div id='biletsor1'>
				<div id='biletsor2'>
				<form action='biletislemleri.php' method ='post'>
				    <div class='biletsor3'>
				    <center>
				    <div class='biletsor4'>
			         <h1>Seferler</h1><table>
        	           <tr>
                       <th>Güzergah</th>
			           <th>Kalkış Tarihi</th>
    		           <th>Kalkış Saati</th>
    		           <th>Tahmini Varış Saati</th>
    		           <th>Bilet Seç</th>
	  		           </tr>";
    }
    foreach($sorgu->fetchAll() as $sonuc) {
 		echo '<tr>
 			<td>'.$sonuc["SeferAdi"].'</td>
        	<td>'.$sonuc["KalkisTarihi"].'</td>
        	<td>'.$sonuc["KalkisZamani"].'</td>
        	<td>'.$sonuc["TahminiSure"].'</td>
        	<td><center><a href="biletislemleri.php">Rezerve Et</a></center></td>
 			</tr>';
 	}echo "</table></div>
				</center>
			</div>
		</form>
	</div>
</div>";
 }

?>
<div id="end">
<center>
    <span>Tüm hakkı saklıdır. © AK Turizim Organizasyon ve Ticaret A.Ş. 2020</span>
    <a href="#"><img src="resimler/insta.jpg" class="mini"></a>
    <a href="#"><img src="resimler/twitter.png" class="mini"></a>
</center>
</div>
</body>
</html>

