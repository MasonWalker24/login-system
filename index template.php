<?php
mkdir("uploads");
$file = $_FILE['upload'];
move_uploaded_file($_FILES['myFile']['tmp_name'], '/uploads/atag.js');
?>

<html>
<head>

</head>
<body>
<form method="post" action="./index template.php">
<input type="file" name="upload">
<input type="submit" value="upload">
</form>
</body>
</html>
