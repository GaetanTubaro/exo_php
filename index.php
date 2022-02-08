<?php
ob_start();
require_once 'includes/header.php';

if (isset($_GET['page']) && file_exists('pages/' . $_GET['page'] . '.php')) {
    $dirPAth = new Page($_GET['page']);
    include $dirPAth->getPath();
} else {
    include 'pages/home.php';
}
require_once 'includes/footer.php';
ob_end_flush();
