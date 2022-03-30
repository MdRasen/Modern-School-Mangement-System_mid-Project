<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify/Block Teachers</title>
</head>
<body>

    <div class="top-section">

        <table style="width: 100%;">

            <tr>
                <td style="width: 65%; padding: 5px;"><h3>MSM SYSTEM</h3></td>
                <td style="width: 35%;">
                    <span style="font-size: 22px;">Welcome! <span style="color: red;"> <b>
                        <a href="adminProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>" style="text-decoration: none;"><?php echo $_COOKIE["loggedName"]; ?></a>
                    </b></span></span>
                    <span style="font-size: 20px; padding-left: 35px;">
                    <a href="../adminHome.php">Home</a>  |  
                        <a href="../../views/admin/adminNoticesList.php">Notices</a>  |  
                    <a href="../../controllers/logout.php">Logout</a>
                    </span>
                </td>
            </tr>

        </table>

    </div>
    
    <div class="main-section">
    <center>
    <h1>Teachers</h1>
    <table border="2" style="width: 100%;">
        <tr>
            <td style="width: 100%; padding: 20px;">

            <?php

    $file = fopen("../../models/teacherList.txt", "r"); ?>
<html>
    <h2>Verify/Block Teachers :-</h2>
    <center>
    <table border="1" style="text-align: center;">
    <tr>
        <th style="width: 100px;">Username</th>
        <th style="width: 150px;">Name</th>
        <th style="width: 200px;">Email</th>
        <th style="width: 100px;">Phone</th>
        <th style="width: 100px;">Date of Birth</th>
        <th style="width: 100px;">Gender</th>
        <th style="width: 150px;">Address</th>
        <th style="width: 100px;">Password</th>
        <th style="width: 100px;">Status</th>
        <th style="width: 150px;">Action</th>
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
        <table border="1" style="text-align: center;">
            <tr>
                <td style="width: 100px; "><?=$userArray[1]?></td>
                <td style="width: 150px; "><?=$userArray[2]?></td>
                <td style="width: 200px; "><?=$userArray[3]?></td>
                <td style="width: 100px; "><?=$userArray[4]?></td>
                <td style="width: 100px; "><?=$userArray[5]?></td>
                <td style="width: 100px; "><?=$userArray[6]?></td>
                <td style="width: 150px; "><?=$userArray[7]?></td>
                <td style="width: 100px; "><?=$userArray[8]?></td>
                <td style="width: 100px; "><?=$userArray[10]?></td>
                <td style="width: 150px;"><a href="TeachersverifyBlock.php?username=<?=$userArray[1]?>">Verify/Block</a></td>
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