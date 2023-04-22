<?php
if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['image']['tmp_name'];
    $name = basename($_FILES['image']['name']);
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    if ($ext === 'jpg' || $ext === 'jpeg' || $ext === 'png') {
        // Move the uploaded file to the server
        move_uploaded_file($tmp_name, 'PicZ/' . $name);

        // Call the Python script to analyze the image
        # $output = shell_exec('python body_shape.py uploads/' . $name);
        $output = shell_exec('x.py PicZ/' . $name);

        // Print the result
        echo $output;
    } else {
        echo 'Invalid file format. Only JPG, JPEG and PNG are allowed.';
    }
}
?>
