<!DOCTYPE html>
<html>
<head>
    <title>Body Shape Analyzer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial, sans-serif; }
        form { display: flex; flex-direction: column; align-items: center; }
        label { margin-top: 1em; }
        input[type="file"] { margin-top: 0.5em; }
        img { margin-top: 1em; max-width: 300px; }
        p { margin-top: 1em; }
    </style>
</head>
<body>
    <h1>Body Shape Analyzer</h1>
    <form action="analyze.php" method="post" enctype="multipart/form-data">
        <label for="image">Choose an image:</label>
        <input type="file" name="image" id="image">
        <button type="submit">Analyze</button>
    </form>
    <?php if (isset($output)) { ?>
        <img src="uploads/<?php echo basename($_FILES['image']['name']); ?>" alt="Input image">
       
		<p>Body Shape: <?php echo $output; ?></p>
<?php } ?>
