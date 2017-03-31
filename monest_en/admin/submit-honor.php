<?php
//panggil file config.php untuk menghubung ke server
require_once '../core/init.php';

//tangkap data dari form
$content = ((isset($_POST['desc']) && !empty($_POST['desc']))?$_POST['desc']:'');

//Submit data ke database
$query = mysql_query("UPDATE honor SET content='$content'");

if ($query) {
    header('location:home_honor.php');

}
?>
