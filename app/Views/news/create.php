<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="./create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />
    (Ex: Tutorial Completed)<br />

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"></textarea><br />
    (Ex: A developer in Spuuzzum reported that he successfully completed the CodeIgniter tutorial!)<br />

    <input type="submit" name="submit" value="Create news item" />
</form>
