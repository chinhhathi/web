
<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/23/2019
 * Time: 11:37 AM
 */
include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
session_start();

$request_id = $_POST['card_id'];

$now = getdate();
$date = $now["year"] . "-". $now["mon"] . "-". $now["mday"];

$sql_student = "INSERT INTO `student_register`(`student_id`, `request_id`, `submit_date`, `status`) VALUES (".$_SESSION['id'].",".$request_id.",'".$date."',1)";

$insert = mysqli_query($conn, $sql_student);

header("Location: student_home.php");
?>
