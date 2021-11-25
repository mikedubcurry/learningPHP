<?php

use function PHPSTORM_META\map;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Rules!</title>
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>
    <h1>Tasks</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <?php if ($task->completed) : ?>
                <strike>
                    <li><?= $task->description ?></li>
                </strike>
            <?php else : ?>

                <li><?= $task->description ?></li>

            <?php endif ?>

        <?php endforeach ?>
    </ul>
    <script src="js/index.js"></script>
</body>

</html>