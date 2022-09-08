<?php include("sqlbaglanti.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>BİLET SORGULAMA</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta name="description" content="Sıfırdan Web Tasarım Projesi - Havva Zeynep Akdemir">
  <meta name="author" content="https://github.com/Havvazeynep , havvazeynepakdemir@gmail.com">
  <meta name="keywords" content="HTML CSS JS Javascript Web Tasarım SQL mysql PHP">
	<script>
    function showUser(str) {
      if (str=="") {
        document.getElementById("txtHint").innerHTML="";
        return;
      }
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("txtHint").innerHTML=this.responseText;
        }
      }
      xmlhttp.open("GET","liste.php?q="+str,true);
      xmlhttp.send();
    }
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
<div id="biletsor1">
	<div id="biletsor2">
		<form action="liste.php" method ="post">
			<div class="biletsor3">
			<center>
				<div class="biletsor4">
					<h1>Bilet Numaranızı Giriniz</h1>
					<input type="text" name="biletsor" onchange ="showUser(this.value)">
				</div>
				<div class="biletsor4">
          <p class="button1">Biletini Bul</p>
				</div>
			</center>
				<div class="biletsor4">
					<table>
            <div class="biletsor5">
  						<div id="txtHint"></div>
            </div>
					</table>
				</div>
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