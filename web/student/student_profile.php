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


$list = "SELECT * FROM organization_requests, organization WHERE organization.id = organization_requests.organization_id AND organization_requests.status = 3";
$query_1 = mysqli_query($conn, $list);

$ability = "SELECT * FROM organization_request_abilities, organization_requests, ability_dictionary WHERE organization_request_abilities.organization_request_id = organization_requests.id AND organization_request_abilities.ability_id=ability_dictionary.id GROUP BY organization_request_abilities.id";
//organization_request_abilities.organization_request_id,ability_dictionary.ability_name , organization_requests.short_description
$query_2 = mysqli_query($conn, $ability);
?>


