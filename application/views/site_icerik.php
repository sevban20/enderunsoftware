<html>

<head>
	<title><?php echo $title; ?></title>
	<style>
		.icerikler{
			width:700px;
			height:150px;
			margin:auto;
			background-color:#95f74f;
			border: 2px solid;
			border-color:#549e1f;
		}
		.yorumlar{
			width:500px;
			height:25px;
			margin:auto;
			background-color:#f7e24f;
			margin-top:5px;
			border: 1px dashed;
		}
		h2{
			color:#9e3918;
			text-align:center;
		}
	</style>
</head>

<body>
	
		<?php
			foreach ($icerikler as $icerik){
				echo  "<h2>".$title."</h2></ br>
				<div class = 'icerikler'>".$icerik->icerik."</div>";
			}
			foreach ($yorumlar as $yorum){
				echo "<div class = 'yorumlar'>".$yorum->yorum."</div>";
			}
		?>
		
	
</body>

</html>