<?php include("sqlbaglanti.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>BİLET AL</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<meta name="description" content="Sıfırdan Web Tasarım Projesi - Havva Zeynep Akdemir">
	<meta name="author" content="https://github.com/Havvazeynep , havvazeynepakdemir@gmail.com">
	<meta name="keywords" content="HTML CSS JS Javascript Web Tasarım SQL mysql PHP">
	<script>
		$( function() {
			//tarih nesnesinin oluşturulması
		 	$( "#tarih" ).datepicker({
		 		dateFormat: "dd-mm-yy",
		 		altFormat: "yy-mm-dd",
 				altField:"#tarih-db",
				monthNames: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık" ],
				dayNamesMin: [ "Pa", "Pt", "Sl", "Ça", "Pe", "Cu", "Ct" ],
				firstDay:1
			});
		} );
	</script>
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
<div id="biletal1">
	<div id="biletal2">
		<div id="biletal3">
			<form  action="sefer.php" method="post">
				<div class="biletal4">
					<center>
						<h1>BİLET AL</h1>
					</center>
				</div>
				<div class="biletal4">
					<center>
					<div class="biletal5">
						<select name="kalkis_sehir">
							<option value="yasiniz">Nereden</option>
							<?php
							$sql = "select SehirID , SehirAdi from sehirler";
							$sorgu = $conne->query($sql);
							 foreach($sorgu->fetchAll() as $sonuc) { ?>
							<option value="<?php echo $sonuc["SehirID"]; ?>"><?php echo $sonuc["SehirAdi"]; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="biletal5">
						<select name="varis_sehir">
							<option value="yasiniz">Nereye</option>
							<?php
							$sql = "select SehirID , SehirAdi from sehirler";
							$sorgu = $conne->query($sql);
							 foreach($sorgu->fetchAll() as $sonuc) { ?>
							<option value="<?php echo $sonuc["SehirID"]; ?>"><?php echo $sonuc["SehirAdi"]; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="biletal5">
						<input id="tarih" type="text" value="Tarih Seçiniz">
						<input type="hidden" id="tarih-db" name="tarih">
					</div>
					<div class="biletal5">
						<input type="submit" name="gonder" value="Bilet Bul" class="button1">
					</div>
				</center>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="end">
<center>
    <span>Tüm hakkı saklıdır. © AK Turizim Organizasyon ve Ticaret A.Ş. 2020</span>
    <a href="#"><img src="resimler/insta.jpg" class="mini"></a>
    <a href="#"><img src="resimler/twitter.png" class="mini"></a>
</center>
</div>
</body>
</html>