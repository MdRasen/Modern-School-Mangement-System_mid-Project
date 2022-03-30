<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class/Sections List</title>
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
    <h1>Class/Sections List</h1>
    <table border="2" style="width: 100%;">
        <tr>
            <td style="width: 100%; padding: 20px;">

            <?php

    $file = fopen("../../models/classList.txt", "r"); ?>
<html>
    <center>
    <table border="1" style="text-align: center;">
    <tr>
        <th style="width: 150px;">Class ID</th>
        <th style="width: 150px;">Class</th>
        <th style="width: 100px;">Section</th>
        <th style="width: 100px;">Room</th>
        <th style="width: 150px;">Teacher</th>
        <th style="width: 200px;">Teacher Phone</th>
        <th style="width: 200px;">Teacher Email</th>

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
                <td style="width: 150px; "><?=$userArray[0]?></td>
                <td style="width: 150px; "><?=$userArray[1]?></td>
                <td style="width: 100px; "><?=$userArray[2]?></td>
                <td style="width: 100px; "><?=$userArray[3]?></td>
                <td style="width: 150px; "><?=$userArray[4]?></td>
                <td style="width: 200px; "><?=$userArray[5]?></td>
                <td style="width: 200px; "><?=$userArray[6]?></td>
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