<?php
//panggil file config.php untuk menghubung ke server
require_once '../core/init.php';

//tangkap data dari form
$position = ((isset($_POST['desc']) && !empty($_POST['desc']))?$_POST['desc']:'');

//Submit data ke database
$query = mysql_query("UPDATE job_center SET position='$position'");

if ($query) {
    header('location:job_center.php');

}
?>
