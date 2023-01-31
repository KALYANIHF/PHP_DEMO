<?php
$message = null;
$success = "color:green";
$failed = "color:red";
// file uploading in php
if (isset($_POST['submit'])) {
    if (!empty($_FILES['upload']['name'])) {
        $file = $_FILES['upload'];
        $file_name = $_FILES['upload']['name'];
        $file_type = $_FILES['upload']['type'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $file_size = $_FILES['upload']['size'];
        $allowed_extension = array('jpg', 'png', 'gif', 'jpeg');
        $file_extension = explode('.', $file_name);
        $file_extension = strtolower(end($file_extension));
        $target_dir = "upload/$file_name";
        // echo $target_dir;
        // echo "<br/>";
        // echo $file_type;
        // echo "<br/>";
        // echo $file_name;
        // die();
        // print_r($file_extension);
        if (in_array($file_extension, $allowed_extension)) {
            if ($file_size > 1000000) {
                $message = "<p style=" . $failed . ">The file size is too large</p>";
            } else {
                move_uploaded_file($file_tmp_name, $target_dir);
                $message = "<p style=" . $success . ">The file is uploaded</p>";
            }
        } else {
            $message = "<p style=" . $failed . ">This file extension is not supported</p>";
        }

    } else {
        $message = "<p style='color:red'>Please upload a file first </p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$message ?? null?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <label for="image">Image Upload:</label>
        <input type="file" name="upload" id="image">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>