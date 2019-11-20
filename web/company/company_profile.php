<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/4/2019
 * Time: 11:38 PM
 */

include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
session_start();

if(isset($_SESSION['tax_number'])) {
    $tax_number = $_SESSION['tax_number'];

    $sql = "SELECT * FROM `organization` WHERE tax_number = " . $tax_number;

    $query = mysqli_query($conn, $sql);
    $company_profile = mysqli_fetch_assoc($query);

    $sql2 = "SELECT * FROM `organization_requests` WHERE organization_id = " . $company_profile['id'];
    $query2 = mysqli_query($conn, $sql2);
    $company_request = mysqli_fetch_assoc($query2);

    $sql3 = "SELECT * FROM `organization_request_abilities` WHERE organization_request_id = ". $company_request['id'];
    $query3 = mysqli_query($conn, $sql3);
    $company_abilities_list = mysqli_fetch_assoc($query3);

    $sql4 = "SELECT * FROM `ability_dictionary` WHERE id = ". $company_abilities_list['ability_id'];
    $query4 = mysqli_query($conn, $sql4);
    $request_ability = mysqli_fetch_assoc($query4);
}



