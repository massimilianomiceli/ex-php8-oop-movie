<?php

require_once("./db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($movies as $movie) { ?>
        <div>
            <?php echo $movie->getMovie(); ?>
        </div>
        <hr>
    <?php } ?> 
</body>
</html>