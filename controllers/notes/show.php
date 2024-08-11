<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$note = $db->query('select * from notes where id=:id', [
        'id' => $_GET['id'],
    ])->find_or_fail();

    
$current_user = 1;
    
authorize($note['user_id'] === $current_user);

view('notes/show.view.php', [
    'note' => $note
]);