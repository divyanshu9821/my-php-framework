<?php

$config = require 'config.php';
$db = new Database($config['database']);

$note = $db->query('select * from notes where id=:id', [
        'id' => $_GET['id'],
    ])->find_or_fail();

    
$current_user = 1;
    
authorize($note['user_id'] === $current_user);

require 'views/notes/show.view.php';