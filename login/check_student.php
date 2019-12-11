
<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/23/2019
 * Time: 11:37 AM
 */
include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
session_start();

$id = $_POST['id_student'];

$sql_student = "SELECT * FROM student WHERE student_code = ".$id;

$result = mysqli_query($conn,$sql_student);
$count = mysqli_num_rows($result);
    if ($count==1) {
        $_SESSION['student_code'] = $id;
        header('Location: /web/student/student_home.php');
    }
    else
    {
        $_SESSION["errors"] = "Your ID is not correct!!! Please re-enter your correct ID";
        header("location: login.php");
    }
?>
