<?php
session_destroy();
$_SESSION['name'] = ' ';
$_SESSION['admin_id'] = ' ';
header('location:index.php?page=logout');