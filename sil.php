<?php include("sqlbaglanti.php") ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
	<title></title>
	<meta name="description" content="Sıfırdan Web Tasarım Projesi - Havva Zeynep Akdemir">
	<meta name="author" content="https://github.com/Havvazeynep , havvazeynepakdemir@gmail.com">
	<meta name="keywords" content="HTML CSS JS Javascript Web Tasarım SQL mysql PHP">
	<meta charset="utf-8"/>
</head>
<body>
<?php
	$id = intval($_GET["id"]);
	$sorgu = $conne->prepare("delete from Biletler where BiletID= ".$id);
	$sil = $sorgu->execute(array($id));
	if ($sil) {
		echo "<script>alert('Kullanıcı Silindi.')</script>";
		header("Location:biletsorgulama.php");
		exit();
	}else {
		echo "<script>alert('Sistemsel bir hata oluştu.')</script>";
	}
	

?>
</body>
</html>