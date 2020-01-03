
<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/23/2019
 * Time: 11:37 AM
 */
include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
session_start();

$organization_name = $_POST['organization_name'];
$employee_count = $_POST['employee_count'];
$gross_revenue = $_POST['gross_revenue'];
$address = $_POST['address'];
$home_page = $_POST['home_page'];


$sql_student = "UPDATE `organization` SET `organization_name`='".$organization_name."',`employee_count`='".$employee_count."',`gross_revenue`='".$gross_revenue."',`address`='".$address."',`home_page`='".$home_page."' WHERE tax_number = ".$_SESSION['tax_number'];
//var_dump($sql_student);die;
$update = mysqli_query($conn, $sql_student);

header("Location: profile.php");
?>
