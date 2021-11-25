<?php include('partials/head.php') ?>
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
<?php include('partials/footer.php') ?>