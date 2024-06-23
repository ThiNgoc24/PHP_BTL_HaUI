<?php
require_once 'C:\xampp\htdocs\BTL_PHP\bao_tri_Member\BaoTriMember_functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $memberFunctions = new BaoTriMemberFunctions();
    if ($memberFunctions->deleteMember($id)) {
        header("Location: index.php");
        exit();
    }
}
?>
