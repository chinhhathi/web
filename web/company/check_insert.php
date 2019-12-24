
<?php
//include($_SERVER['DOCUMENT_ROOT'].'/web/init.php');
if(isset($_POST['submit'])) {
    $position = $_POST['position'];
    $amount = $_POST['amount'];
    $typeOfWork = $_POST['typeOfWork'];
    $address = $_POST['address'];
    $time_start = $_POST['time_start'];
    $time_final = $_POST['time_final'];
    $descript = $_POST['descript'];

    $sql_insert = "INSERT INTO `organization_requests`(`id`, `organization_id`, `subject`, `short_description`, `amount`, `date_submitted`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";

}
?>
