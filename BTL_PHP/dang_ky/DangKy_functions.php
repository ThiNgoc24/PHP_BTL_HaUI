<?php
require_once 'C:\xampp\htdocs\BTL_PHP\conn_db.php';

function isValidPassword($password) {
    return preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/', $password);
}

function isUsernameExists($username) {
    $query = "SELECT COUNT(*) AS count FROM `member` WHERE `username` = '$username'";
    $result = queryDatabase($query);
    return $result[0]['count'] > 0;
}

function capitalizeFullName($fullname) {
    return ucwords(strtolower($fullname));
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/\.[a-zA-Z]{2,}$/', $email);
}

function registerUser($username, $password, $fullname, $phonenumber, $address, $email) {
    $password = md5($password);
    $fullname = capitalizeFullName($fullname); // Ensure fullname is capitalized
    $query = "INSERT INTO `member` (`username`, `password`, `fullname`, `phonenumber`, `address`, `email`) VALUES ('$username', '$password', '$fullname', '$phonenumber', '$address', '$email')";
    return executeQuery($query);
}
?>
