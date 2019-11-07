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
}

