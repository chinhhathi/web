<!DOCTYPE html>
<html>
<title>Log in</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    body,h1,h2,h3,h4,h5 {font-family: "Times New Roman", sans-serif}
    body {font-size: 16px;}
    img {margin-bottom: -8px;}
</style>
<body class="w3-content w3-black" style="max-width:1500px;">
    <header class="w3-display-container w3-center">
            <img class="w3-image w3-opacity" src="https://www.singhalonline.com/assets/images/photos/header-2.jpg" alt="Image 1" style="min-width:500px;" width="1500" height="1000">
            <div class="w3-display-middle w3-padding w3-hide-small" style="width:50%">
                <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large" style="color: #A9A9A9;">
                    <h1>Sàn giao dịch Thực tập sinh</h1>
                    <hr class="w3-opacity">
                    <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
                        <div class="w3-bar">
                            <button class="w3-bar-item w3-button w3-opacity" onclick="select_tab('student')">Log in as Student</button>
                            <button class="w3-bar-item w3-button w3-opacity" onclick="select_tab('professor')">Log in as Professor</button>
                            <button class="w3-bar-item w3-button w3-opacity" onclick="select_tab('company')">Log in as Company</button>
                        </div>

                        <div id="student" class="w3-container types">
                            <?php include "login_student.php"; ?>
                        </div>
                        <div id="professor" class="w3-container types" style="display:none">
                            <?php include "login_professor.php"; ?>
                        </div>
                        <div id="company" class="w3-container types" style="display:none">
                            <?php include "login_company.php"; ?>
                        </div>
                        <hr>
                        <?php
                        session_start();
                        if(isset($_SESSION["errors"])){
                            $error = $_SESSION["errors"];
                            echo "<span>$error</span>";
                        }
                        session_destroy();
                        ?>
                    </div>
                </div>
            </div>
    </header>

<script>
    function select_tab(type) {
        var i;
        var x = document.getElementsByClassName("types");
        console.log(x);
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(type).style.display = "block";
    }
</script>
</body>
</html>
