<?php require ('partials/head.php') ?>
<?php require ('partials/navbar.php') ?>

<main id="main-section">
    <?php foreach($notes as $note):?>
        <a href="/note?id=<?=$note['id']?>">
            <li><?= htmlspecialchars($note['body']) ?></li>
        </a>
    <?php endforeach ?>
    <br>
    <a href="/notes/create">Create Notes</a>
</main>

<?php require ('partials/footer.php'); ?>