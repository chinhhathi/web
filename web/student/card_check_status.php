<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/5/2019
 * Time: 1:36 AM
 */

if ($student_register != null) {
    if(count($student_register) > 0) {

        foreach ($student_register as $key => $value) {
            if ($key == "status" && ($value == 1 || $value == 2)) {
                include "card_register_isset.php";
            }
            if ($key == "status" && ($value == 0)) {
                include "card_register_list.php";
            }
        }
    }
    else
        include "card_register_list.php";
}
else
    include "card_register_list.php";
?>