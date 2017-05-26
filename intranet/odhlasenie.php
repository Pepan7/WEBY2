<?php
include_once 'prihlasenie.php';
unset($_SESSION['LDAP']);
session_destroy();
header("Location:prihlasitsadointranetu.php");
?>