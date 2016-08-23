<?php //include 'form.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Главная</title>
</head>
<body>
<div id="header">
	<a href="index.php">Photo</a>
	<a href="video.php">Video</a>
</div>
	<div id="main">
		<h1>Photo</h1>
		<?php 	
		for ($i=3020; $i <= 3060 ; $i++) { 					
				// файл, который мы проверяем
				$url = "http://10.5.5.9:8080/videos/DCIM/100GOPRO/GOPR".$i.".JPG";
				//echo $url."<br>";
				$Headers = @get_headers($url);
				// проверяем ли ответ от сервера с кодом 200 - ОК
				//if(preg_match("|200|", $Headers[0])) { // - немного дольше :)
				if(preg_match("|200|", $Headers[0])) {
				echo "<div class='image'><img class=photo src='".$url."'>";
				$dowloadurl = "<br><a Download href='".$url."'>Download</a></div>";
				echo $dowloadurl;
				}
		}
		?>
	</div>
</body>
</html>