<html>

<head><title><?php echo $title; ?></title></head>



<body>

	<?php
		foreach($icerikler as $icerik){
			
			echo "<div><a href = 'http://localhost:81/codeigniter/index.php/site_controller/icerik_goster?id={$icerik->id}&baslik={$icerik->baslik}'>".$icerik->baslik."</a></div>";
			
		}
	?>

</body>

</html>