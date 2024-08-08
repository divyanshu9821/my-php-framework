<?php require ('partials/head.php') ?>
<?php require ('partials/navbar.php') ?>

<main id="main-section">
    <?php foreach($notes as $note):?>
        <a href="/note?id=<?=$note['id']?>">
            <li><?= $note['body'] ?></li>
        </a>
    <?php endforeach ?>
</main>

<?php require ('partials/footer.php'); ?>