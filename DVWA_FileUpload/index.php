<?php
if (isset($_POST['Upload'])) {
    // 目标路径
    $target_path = "file";
    // . 是字符串串接符, 可以将后面的字符串和前面的字符串拼接起来
    $target_path .= basename($_FILES['uploaded']['name']);

    // Can we move the file to the upload folder?
    if (!move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) {
        // No
        echo '<pre>Your image was not uploaded.</pre>';
    } else {
        // Yes!
        echo "<pre>{$target_path} succesfully uploaded!</pre>";
    }
}
?>