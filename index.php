<?php
ob_start();
require_once 'includes/header.php';
if(isset($_GET['page']) && file_exists('pages/' . $_GET['page'] . '.php')){
    include 'pages/' . $_GET['page'] . '.php';
} else {
    include 'pages/home.php';
}
require_once 'includes/footer.php';
ob_end_flush();
?>