<?php require ('views/partials/head.php') ?>
<?php require ('views/partials/navbar.php') ?>

<main id="main-section">
        <p><?= htmlspecialchars($note['body']) ?></p>
</main>

<?php require ('views/partials/footer.php'); ?>