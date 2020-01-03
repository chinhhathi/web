
<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/23/2019
 * Time: 11:37 AM
 */
include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
session_start();

$first_name = $_POST['first_name'];
$sur_name = $_POST['sur_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$class_name = $_POST['class_name'];
$join_date = $_POST['join_date'];


$sql_student = "UPDATE `student` SET `first_name`='".$first_name."',`sur_name`='".$sur_name."',`last_name`='".$last_name."',`date_of_birth`='".$date_of_birth."',`join_date`='".$join_date."',`class_name`='".$class_name."' WHERE id = ".$_SESSION['id'];

$update = mysqli_query($conn, $sql_student);

header("Location: profile.php");
?>
