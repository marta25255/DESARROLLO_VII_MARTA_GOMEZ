<?php

$users = [
    'admin' => 'password123' ,
    'user1' => 'pass123'
];

function validateLogin($username, $password) {
    global $users;
    return isset($users[$username]) && $users[$username] === $password;
}

function isLoggedIn() {
    return isset($_SESSION['username']);
}

function requireLogin($username){
    if (!isLoggedIn()){
        header('Location: login.php?next='.urlencode($_SERVER['REQUEST_URI']));
        exit();
    }
    if ($username && $username!== $_SESSION['username']){
        header('Location: login.php?next='.urlencode($_SERVER['REQUEST_URI']));
        exit();
    }
}

  
