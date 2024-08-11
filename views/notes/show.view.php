<?php view('partials/head.php') ?>
<?php view('partials/navbar.php') ?>

<main id="main-section">
        <p><?= htmlspecialchars($note['body']) ?></p>
</main>

<?php view('partials/footer.php'); ?>