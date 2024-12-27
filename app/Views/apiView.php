<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
</head>
<body>
<?php foreach ($home as $output) : ?>
    <h2><?php echo $output['Judul']; ?></h2>
    <p><?php echo $output['Paragraft1']; ?></p>
<?php endforeach; ?>
</body>
</html>