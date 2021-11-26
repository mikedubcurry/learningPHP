<?php include('partials/head.php') ?>

<h1>All Users</h1>
<h1>Submit your name</h1>
<form action="/users" method="post">
    <label for="name">Name: </label>
    <input required type="text" id="name" name="name">

    <button type="submit">Submit</button>
</form>

<ul>
    <?php foreach ($users as $user) : ?>

        <li><?= $user->name ?></li>

    <?php endforeach ?>
</ul>

<?php include('partials/footer.php') ?>