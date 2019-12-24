<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/4/2019
 * Time: 8:34 PM
 */

include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');

$id = $_SESSION['id'];

$sql_status = "UPDATE student_register SET status = 0";

$query_status = mysqli_query($conn, $sql_status);


$sql = "SELECT * FROM `student_register` WHERE student_id = ".$id;

$query = mysqli_query($conn, $sql);

$student_register = mysqli_fetch_assoc($query);


if($student_register != null) {

    $sql2 = "SELECT * FROM `organization_requests` WHERE id = " . $student_register['request_id'];
    $query2 = mysqli_query($conn, $sql2);
    $organization_request = mysqli_fetch_assoc($query2);

    $_SESSION['organization_id'] = $organization_request['organization_id'];

}
