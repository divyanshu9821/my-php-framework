<?php view('partials/head.php') ?>
<?php view('partials/navbar.php') ?>

<main id="main-section">
    <?php foreach($notes as $note):?>
        <a href="/note?id=<?=$note['id']?>">
            <li><?= htmlspecialchars($note['body']) ?></li>
        </a>
    <?php endforeach ?>
    <br>
    <a href="/notes/create">Create Notes</a>
</main>

<?php view ('partials/footer.php'); ?>