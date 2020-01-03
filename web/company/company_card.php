<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/23/2019
 * Time: 9:12 AM
 */
?>

<form action="SCR_1002E_sql.php" method="post">
    <div class="w3-content w3-padding-top  w3-white w3-margin-bottom w3-margin-top" style="max-width:1200px;">
        <div class="w3-card w3-padding">
            <a href="company_home.php" style="text-decoration: none" class="w3-hover-opacity"><i
                        class="fa fa-home w3-margin-right"></i>Trang chủ</a> /
            <a style="text-decoration: none" class="w3-hover-opacity" href="company_home.php">Danh sách phiếu yêu cầu doanh nghiệp</a> /
            <a style="text-decoration: none" class="w3-hover-opacity" href="#">Phiếu của tôi</a>
        </div>
        <div style="padding-top:1px;">
            <a class="w3-button w3-teal w3-padding-large w3-round-large" href="new_request.php"><i class="fa fa-check"></i>Tạo mới phiếu</a>

            <br>
            <h3 class="w3-container w3-center"><b>Phiếu của tôi</b></h3>
            <br>
            <?php

            // output data of each row
            while ($row = $query2->fetch_assoc()) {

                ?>
                <div class="w3-padding">
                    <div class="w3-container w3-while w3-cell">
                        <img src="https://laptrinhcuocsong.com/images/coding-php.png" alt="Norway" style="width:300px;height: 300px" class="w3-hover-opacity">
                    </div>
                    <div class="w3-container w3-while w3-cell">
                        <h3><b><?php echo $row['subject'];?></b></h3>
                        <h4><i class="fa fa-diamond fa-fw"></i> Yêu cầu: <?php echo $row['short_description']; ?>
                            <p><i class="fa fa-fw fa-male"></i> Chúng tôi cần: <b><?php echo $row['amount'];?></b> người</p>
                            <p><i class="fa fa-fw fa-check-square"></i> Số lượng đã đăng ký: <b>2</b></p>
                            <p><i class="fa fa-fw fa-check"></i> Trạng thái: Còn hiệu lực</p>
                            <?php echo ""?>
                            <a class="w3-button w3-teal w3-padding-large w3-round-large" href="SCR_1002E_sql.php?id=<?php echo $row['id'] ?>"><i class="fa fa-check"></i>Xem chi tiết</a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="w3-center w3-padding-32">
            <div class="w3-bar">
                <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
            </div>
        </div>
    </div>
</form>