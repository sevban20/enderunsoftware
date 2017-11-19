<html>
	<head>
		<title>Bloğuma Hoşgeldiniz</title>
	</head>
	
	<body>
		<form action = "index.php/blog_cont/olustur" method = "post">
			<table cellpadding = "5" cellspacing = "5">
				<tr>
					<td>Başlık: </td>
					<td><input type = "text" name = "baslik" /></td>
				</tr>
				<tr>
					<td>İçerik: </td>
					<td><textarea rows = "6" cols = "50" name = "icerik"></textarea></td>
				</tr>
				<tr>
					<td><input type = "submit" value = "Gönder" /></td>
				</tr>
			</table>
		</form>
	</body>


</html>