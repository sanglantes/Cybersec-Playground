<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>

<?php 
    $upload_info = array(
        "name" => $_FILES["userfile"]["name"],
        "type" => $_FILES["userfile"]["type"],
        "size" => $_FILES["userfile"]["size"],
        "error" => $_FILES["userfile"]["error"],
   );
    $hash_title = md5(time() . basename($upload_info["name"])); // Hashes title with time + file name
    $ext = strtolower(pathinfo($upload_info["name"], PATHINFO_EXTENSION)); // Extension lowercase
    $target_dir = "uploads/";
    $target_file = $target_dir . $hash_title . "." . $ext;
    $allowed_formats = ['png', 'tiff', 'jpg', 'jpeg', 'gif', 'webp'];

    if (in_array($ext, $allowed_formats)) { // If extension is allowed
        foreach (scandir($target_dir) as $index) { // Check if there is a duplicate
            if ($index !== '.' && $index !== '..') {
                if (md5_file($_FILES["userfile"]["tmp_name"]) == md5_file($target_dir . $index)) { // Compare contents
                    die("File already exists." . "<br>");
                }
            }
        }
        move_uploaded_file($_FILES["userfile"]["tmp_name"], "$target_file");
        header('Location: ' . $target_file);
    }
    else {
        echo "File format not allowed." . "<br>";
    }
?>

</body>
</html>
