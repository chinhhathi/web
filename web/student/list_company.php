<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/4/2019
 * Time: 11:38 PM
 */

include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');





    $sql2 = "SELECT * FROM `organization_requests`";
    $query2 = mysqli_query($conn, $sql2);

    $company_request = mysqli_fetch_assoc($query2);

//    echo "<pre>";
//    var_dump($company_request);die;






