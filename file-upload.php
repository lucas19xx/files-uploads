<!DOCTYPE html>
<head>
<title>Upload</title>
</head>
 
	<body>
		<h4>Upload de arquivos.</h4>

		<?php
 
		require_once ("class/Upload.php");
 
			$myUpload = new Upload($_FILES["arquivo"]);
 
			$check = $myUpload->makeUpload();
 		?>

 		<p>Clique <a href="index.html" style="text-decoration: none">aqui</a> para fazer um novo Upload.</p>

	</body>
</html>