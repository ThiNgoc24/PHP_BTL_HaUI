<?php
include '../../conn_db.php';

function checkEmailExists($email) {
    $sql = "SELECT * FROM member WHERE email = '$email'";
    return queryDatabase($sql);
}

function updatePassword($email, $hashed_password) {
    $sql = "UPDATE member SET password = '$hashed_password' WHERE email = '$email'";
    return executeQuery($sql);
}
?>
