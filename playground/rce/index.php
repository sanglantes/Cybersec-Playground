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

<div class="upload-container">
	<div class="img-preview">
		<form method="post" action="upload.php" enctype="multipart/form-data">
			<input type="file" name="fileTitle" id="uploadedFile" required>
			<input type="submit" value="Upload" name="submit">
		</form>
	</div>
</div>
</main>

</body>
</html>
