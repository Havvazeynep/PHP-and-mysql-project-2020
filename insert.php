<?php include("sqlbaglanti.php");
	if ($_POST) {
		$ad = $_POST["ad"];
		$soyad = $_POST["soyad"];
		$email = $_POST["email"];
		$mesaj = $_POST["mesaj"];

		if(!empty($ad) && !empty($soyad) && !empty($email) && !empty($mesaj)) {
			$ekle = $conne->query("insert into mesajlar(ad,soyad,email,mesaj,onay) values ('$ad','$soyad','$email','$mesaj',0)");
			if ($ekle) {
				header("Location:iletisim.php");
			}else {
				echo "<center>veriler eklenemedi<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
			}
		}else {
			echo "<center>BOŞ ALAN BIRAKMAYINIZ<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
		}

	}
?>

<html>
	<meta charset="utf-8">
	<meta name="description" content="Sıfırdan Web Tasarım Projesi - Havva Zeynep Akdemir">
	<meta name="author" content="https://github.com/Havvazeynep , havvazeynepakdemir@gmail.com">
	<meta name="keywords" content="HTML CSS JS Javascript Web Tasarım SQL mysql PHP">
</html>
	