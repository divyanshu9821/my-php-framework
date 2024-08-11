<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);



$error = [];

if($_SERVER['REQUEST_METHOD']==='POST'){


    if(!Validator::string($_POST['body'], 1, 10)){
        $error['body'] = "A body of no more than 10 characters is required";
    }

    if(empty($error)){   
        $db->query('insert into notes(body, user_id) values(:body, :user_id)',[
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}


view('notes/create.view.php', [
    'error' => $error
]);