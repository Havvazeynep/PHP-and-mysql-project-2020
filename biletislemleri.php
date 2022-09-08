<?php include("sqlbaglanti.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>REZERVASYON</title>
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
$page = isset($_GET["page"]) ? addslashes($_GET["page"]) : "";
if($page == "ekle") {
	if($_POST) {
		$musteriTC = addslashes($_POST["musteriTC"]);
		$ad = addslashes($_POST["ad"]);
		$soyad = addslashes($_POST["soyad"]);
		$email = addslashes($_POST["email"]);
		$telefon = addslashes($_POST["telefon"]);
		$cinsiyet = addslashes($_POST["cinsiyet"]);
		$sorgu = $conne->prepare("INSERT INTO  Musteriler SET  musteriTC= :MusteriTC, ad= :Ad, soyad= :Soyad, email= :Email, telefon= :Telefon, cinsiyet= :Cinsiyet");
		try {
			$ekle = $sorgu->execute(array(
 			"MusteriTC" => $musteriTC,
			"Ad" => $ad,
			"Soyad" => $soyad,
			"Email" => $email,
			"Telefon" => $telefon,
			"Cinsiyet" => $cinsiyet,
			));
			echo $ekle ? "<script>alert('Kullanıcı Eklendi.')</script>" : "<script>alert('Sistemsel bir hata oluştu.')</script>";
			header("Location:biletal.php");
		}catch(PDOException $e ) {
 			echo $e->getMessage();
		}
		
	}
}
?>
<div id="satis1">
	<div id="satis2">
		<form action="?page=ekle" method="post">
			<div class="satis3">
				<h1>Bilgilerinizi Giriniz</h1>
				<label for="ad">TC kimlik numaranızı giriniz</label>
				<input type="text" name="musteriTC">
				<label for="ad">Adınızı giriniz</label>
				<input type="text" name="ad">
				<label for="soyad">Soyadınızı giriniz</label>
				<input type="text" name="soyad">
				<label for="ad">E-posta adresini giriniz</label>
				<input type="text" name="email">
				<label for="ad">Telefon numaranızı giriniz</label>
				<input type="text" name="telefon">
				<label for="ad">Cinsiyetinizi giriniz</label>
				<input type="text" name="cinsiyet">
    			<input type="submit" value="Rezerve Et">
			</div>
		</form>
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