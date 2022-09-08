<!--ELİF NUR AKPINAR-->
<!DOCTYPE html>
<html lang="tr-TR">
<head>
	<title>İLETİŞİM</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="tr">
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
<div>
<div class="panel">
	<form action="insert.php" method ="post">
		<table>
			<tr>
				<h1>Bize Ulaşın</h1>
			</tr>
			<tr>
				<td>Adınız</td>
				<td>:</td>
				<td><input type="text" name="ad" class="nam"></td>
			</tr>
			<tr>
				<td>Soyadınız</td>
				<td>:</td>
				<td><input type="text" name="soyad" class="nam"></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td>:</td>
				<td><input type="text" name="email" class="nam"></td>
			</tr>
			<tr>
				<td>Mesajınız</td>
				<td>:</td>
				<td>
					<textarea name="mesaj" class="mesaj"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="gonder" value="Gönder" class="button">
					<input type="reset" name="temizle" value="Temizle" class="button">
				</td>
			</tr>
		</table>
	</form>
</div>
</div>
<div id="end">
<center>
    <span>Tüm hakkı saklıdır. © AK Organizasyon ve Ticaret A.Ş. 2020</span>
    <a href="#"><img src="resimler/insta.jpg" class="mini"></a>
    <a href="#"><img src="resimler/twitter.png" class="mini"></a>
</center>
</div>
</body>
</html>