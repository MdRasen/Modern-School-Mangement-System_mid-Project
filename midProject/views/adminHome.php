<?php
    require("../controllers/header.php");
    session_start();

    if(!isset($_SESSION['status'])){
        header("location: ../views/login.php");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
</head>
<body>

    <div class="top-section">

        <table style="width: 100%;">

            <tr>
                <td style="width: 65%; padding: 5px;"><h3>MSM SYSTEM</h3></td>
                <td style="width: 35%;">
                    <span style="font-size: 22px;">Welcome! <span style="color: red;"> <b>
                        <a href="admin/adminProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>" style="text-decoration: none;"><?php echo $_COOKIE["loggedName"]; ?></a>
                    </b></span></span>
                    <span style="font-size: 20px; padding-left: 35px;">
                    <a href="#">Home</a>  |  
                        <a href="../views/admin/adminNoticesList.php">Notices</a>  |  
                    <a href="../controllers/logout.php">Logout</a>
                    </span>
                </td>
            </tr>

        </table>

    </div>
    
    <div class="main-section">
    <center>
    <h1>Admin Dashboard</h1>
    <table border="2" style="width: 100%;">
        <tr>
            <td style="width: 25%; padding: 10px; padding-left: 40px;">
            <a href="admin/adminTeachers.php">Teachers</a> <br> <br>
            <a href="admin/adminStudents.php">Students</a> <br> <br>
            <a href="admin/adminClassSections.php">Classes/Sections</a> <br> <br>
            <!-- <a href="#">Sections</a> <br> <br> -->
            <a href="admin/adminNotices.php">Notices</a> <br> <br>
        </td>
            <td style="width: 75%; padding: 20px;">

            <?php

    $file = fopen("../models/adminList.txt", "r"); ?>
<html>
    <h2>Admin List :-</h2>
    <center>
    <table border="1" style="width: 1000px; text-align: center;">
    <tr>
        <th style="width: 200px;">Username</th>
        <th style="width: 200px;">Name</th>
        <th style="width: 200px;">Email</th>
        <th style="width: 200px;">Phone</th>
    </tr>
</table>
    </center>
</html>

<?php
        while(!feof($file)){
                $user = fgets($file);
                $userArray = explode("|", $user); ?>

        <html>
        <center>
        <table border="1" style="width: 1000px; text-align: center;">
            <tr>
                <td style="width: 200px;"><?=$userArray[1]?></td>
                <td style="width: 200px;"><?=$userArray[2]?></td>
                <td style="width: 200px;"><?=$userArray[3]?></td>
                <td style="width: 200px;"><?=$userArray[4]?></td>
            </tr>
        </table>
        </center>
        </html>
        <?php
                }

?>
        
        </td>
        </tr>
    </table>
    </center>
    </div>
    
</body>
</html>