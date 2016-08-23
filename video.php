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
		<h1>Video</h1>
			<?php 
				for ($i=3000; $i <= 3100 ; $i++) {
					$url = "http://10.5.5.9:8080/videos/DCIM/100GOPRO/GOPR".$i.".MP4";
					$Headers = @get_headers($url);
					if(preg_match("|200|", $Headers[0])) {
						echo "<div class='image'><video width='400' height='300' src='".$url."'><source type='video/mp4'></video>";
						$dowloadurl = "<br><a Download href='".$url."'>Download</a></div>";
						echo $dowloadurl;
					}
				}
			?>
	</div>
</body>
</html>