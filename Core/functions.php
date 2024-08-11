<?php
function dd($variable = ''){
    echo "<pre>";    
    print_r($variable);
    die;
}

function ddd($variable = ''){
    echo "<pre>";    
    var_dump($variable);
    die;
}

function is_url($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}


function base_path($path){
    return BASE_PATH.$path;
}

function view($path, $data = []){
    extract($data);
    require base_path('views/'.$path);
}