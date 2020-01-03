<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/24/2019
 * Time: 9:16 AM
 */
include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
session_start();

$id = $_POST['id_company'];

$sql_company = "SELECT * FROM organization WHERE tax_number = ".$id;

$result = mysqli_query($conn,$sql_company);
$count = mysqli_num_rows($result);

if ($count==1) {
    $_SESSION['tax_number'] = $id;

    header('Location: /web/company/company_home.php');
}
else
{
    $_SESSION["errors"] = "Your Tax is not correct!!! Please re-enter your correct Tax";
    header("location: login.php");
}
?>