<?php

include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
session_start();

$id = $_POST['id_professor'];

$sql_professor = "SELECT * FROM professor WHERE professor_code = ".$id;

$result = mysqli_query($conn,$sql_professor);
$count = mysqli_num_rows($result);

if ($count==1) {
    $_SESSION['professor_code'] = $id;
    header('Location: /web/home/professor_home.php');
}
else
{
    $_SESSION["errors"] = "Your ID is not correct!!! Please re-enter your correct ID";
    header("location: login.php");

}
?>