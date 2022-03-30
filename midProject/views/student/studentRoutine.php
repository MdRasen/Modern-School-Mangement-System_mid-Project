<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Routine</title>
</head>
<body>

    <div class="top-section">

        <table style="width: 100%;">

            <tr>
                <td style="width: 65%; padding: 5px;"><h3>MSM SYSTEM</h3></td>
                <td style="width: 35%;">
                    <span style="font-size: 22px;">Welcome! <span style="color: red;"> <b>
                        <a href="studentProfile.php?username=<?php echo $_COOKIE["loggedName"]; ?>" style="text-decoration: none;"><?php echo $_COOKIE["loggedName"]; ?></a>
                    </b></span></span>
                    <span style="font-size: 20px; padding-left: 35px;">
                    <a href="../studentHome.php">Home</a>  |  
                        <a href="../../views/teacher/teacherNoticeList.php">Notices</a>  |  
                    <a href="../../controllers/logout.php">Logout</a>
                    </span>
                </td>
            </tr>

        </table>

    </div>
    
    <div class="main-section">
        
        <center>
        <h1>Download Class Routine :-</h1>

            <table border="2" style="width: 50%; text-align: center;"> 
                <tr>
                    <th>Class/Section</th>
                    <th>Files (Download)</th>
                </tr>

                <tr>
                    <td>Class01</td>
                    <td>
                    <a href="../../models/uploads/class01_Routine.zip" download>
                <h3>class01_Routine.zip</h3>
                </a>
                    </td>

                </tr>

                <tr>
                    <td>Class02</td>
                    <td>
                    <a href="../../models/uploads/class02_Routine.zip" download>
                <h3>class02_Routine.zip</h3>
                </a>
                    </td>

                </tr>

                <tr>
                    <td>Class03</td>
                    <td>
                    <a href="../../models/uploads/class03_Routine.zip" download>
                <h3>class03_Routine.zip</h3>
                </a>
                    </td>

                </tr>

                <tr>
                    <td>Class04</td>
                    <td>
                    <a href="../../models/uploads/class04_Routine.zip" download>
                <h3>class04_Routine.zip</h3>
                </a>
                    </td>

                </tr>

                <tr>
                    <td>Class05</td>
                    <td>
                    <a href="../../models/uploads/class05_Routine.zip" download>
                <h3>class05_Routine.zip</h3>
                </a>
                    </td>
   
                </tr>

            </table>
        </center>
    </div>
    
</body>
</html>