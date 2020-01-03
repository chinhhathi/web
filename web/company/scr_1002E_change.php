
<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/23/2019
 * Time: 11:37 AM
 */
include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
session_start();

$subject = $_POST['subject'];
$short_description = $_POST['short_description'];
$amount = $_POST['amount'];
$date_submitted = $_POST['date_submitted'];


$sql_student = "UPDATE `organization_requests` SET `subject`='".$subject."',`short_description`='".$short_description."',`amount`='".$amount."',`date_submitted`='".$date_submitted."' WHERE id=".$_SESSION['org_request']['id'];
//var_dump($sql_student);die;
$update = mysqli_query($conn, $sql_student);

header("Location: company_home.php");
?>
