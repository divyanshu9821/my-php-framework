<?php view('partials/head.php') ?>
<?php view('partials/navbar.php') ?>

<main id="main-section">
        <form action="" method="post">
                <label for="body">Note Description</label>
                
                <div>
                        <textarea name="body" rows="20" cols="50" id="body"><?=$_POST['body']??''?></textarea>
                        <?php if(isset($error['body']))
                                echo "<br>".$error['body'];
                        ?>
                </div>

                <button type="submit">Create</button>
        </form>
</main>

<?php view ('partials/footer.php'); ?>