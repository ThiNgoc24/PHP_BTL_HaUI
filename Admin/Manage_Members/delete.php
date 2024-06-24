<?php
require_once 'BaoTriMember_functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $memberFunctions = new BaoTriMemberFunctions();
    if ($memberFunctions->deleteMember($id)) {
        header("Location: index.php");
        exit();
    }
}
?>
