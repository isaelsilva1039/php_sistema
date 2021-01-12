<?php
session_start();
$_SESSION['id'];
session_destroy();
if (!isset($_SESSION['id'])) {
    // header("location: ../../../index.php");
    header("location: ../index.php");

}else{
    session_destroy();
    header("location: ../index.php");
}
