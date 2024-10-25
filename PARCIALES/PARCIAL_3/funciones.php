<?php
session_start();

// Predefined users array
$users = [
    'admin' => 'password123',
    'user1' => 'pass123'
];

// Function to validate login
function validateLogin($username, $password) {
    global $users;
    return isset($users[$username]) && $users[$username] === $password;
}

// Function to check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['username']);
}

// Function to redirect if not logged in
function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: index.php');
        exit();
    }
}