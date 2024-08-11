<?php


$config = require 'config.php';
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD']==='POST'){

    $error = [];
    if(strlen($_POST['body'])===0){
        $error['body'] = "A body is required";
    }

    if(strlen($_POST['body'])>10){
        $error['body'] = "Body cannot be more than 10 characters";
    }

    if(empty($error)){   
        $db->query('insert into notes(body, user_id) values(:body, :user_id)',[
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require 'views/note-create.view.php';