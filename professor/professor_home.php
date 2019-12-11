<?php
include "professor_profile.php";
include "header.php";
?>
<div style="padding-top:1px;">
    <hr>
    <br>
    <h3 class="w3-container w3-center"><b>Danh sách phiếu yêu cầu</b></h3>
    <!-- Second Photo Grid-->
    <?php

    // output data of each row
    while ($row = $query2->fetch_assoc()) {

    ?>
    <div class="w3-container w3-while w3-cell">
        <img src="https://laptrinhcuocsong.com/images/coding-php.png" alt="Norway" style="width:300px;height: 300px"
             class="w3-hover-opacity">
    </div>
    <div class="w3-container w3-while w3-cell">
        <h3 class=""><b><?php echo $row['subject']; ?></b></h3>
        <h4><i class="fa fa-diamond fa-fw"></i> Công ty: <?php echo $row['short_description']; ?>
        </h4>
        <p><i class="fa fa-fw fa-male"></i> Chúng tôi cần: <b><?php echo $row['amount']; ?></b>
            người</p>
        <p><i class="fa fa-fw fa-check-square"></i> Số lượng đã đăng ký: <b>20</b></p>
        <p><i class="fa fa-fw fa-check"></i> Trạng thái: Còn hiệu lực</p>
        <a href="view_src_1001V.php">
            <button type="submit" class="w3-button w3-green">Chi tiết</button>
        </a>
    </div>
</div>
<?php }

?>


<div class="w3-center w3-padding-32">
    <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
        <a href="#" class="w3-bar-item w3-black w3-button">1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
</div>
<?php
include "foooter.php";
?>
