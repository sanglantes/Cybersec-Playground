<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Linking -->
	<link rel="stylesheet" href="../../external/style.css">
	<link rel="stylesheet" href="rce.css">
	<!-- Linking -->
</head>
<body>
<main>
<div>
<h1>Image upload service</h1>
<h2>Upload your favourite images and share them!</h2>
</div>
	<form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="1500000" />
    Upload your image: <input name="userfile" type="file" />
    <input type="submit" value="Upload" />
</form>
</main>

</body>
</html>
