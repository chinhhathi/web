<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/4/2019
 * Time: 11:38 PM
 */

include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
if(isset($_SESSION['organization_id'])) {
    $organization_id = $_SESSION['organization_id'];

    $sql = "SELECT * FROM `organization` WHERE id = " . $organization_id;

    $query = mysqli_query($conn, $sql);
    $company_profile = mysqli_fetch_assoc($query);
}
