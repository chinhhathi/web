<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/4/2019
 * Time: 11:44 PM
 */

include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
session_start();

$student_code = $_SESSION['student_code'];

$sql = "SELECT * FROM `student` WHERE student_code = ".$student_code;

$query = mysqli_query($conn, $sql);
$student_profile = mysqli_fetch_assoc($query);

$_SESSION['id'] = $student_profile['id'];

