<?php
    require("../../controllers/header.php");

    $username = $_REQUEST["username"];
    $content = "";

    $file = fopen("../../models/verStudentList.txt", "r");
                while(!feof($file)){
                    $user = fgets($file);

                    $userArray = explode("|", $user);
                    if($userArray[1] == $username){

                        $updateUser = $userArray;
                        break;
                    }
                    
                }
                //print_r($updateUser);                         
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
</head>

<body>

    <div class="top-section">

        <table style="width: 100%;">

            <tr>
                <td style="width: 65%; padding: 5px;">
                    <h3>MSM SYSTEM</h3>
                </td>
                <td style="width: 35%;">
                    <span style="font-size: 22px;">Welcome! <span style="color: red;"> <b>
                                <a href="#" style="text-decoration: none;"><?php echo $_COOKIE["loggedName"]; ?></a>
                            </b></span></span>
                    <span style="font-size: 20px; padding-left: 35px;">
                        <a href="../studentHome.php">Home</a> |
                        <a href="../student/studentNoticesList.php">Notices</a> |
                        <a href="../../controllers/logout.php">Logout</a>
                    </span>
                </td>
            </tr>

        </table>

    </div>

    <div class="main-section">

        <table border="2" style="width: 100%;">
            <tr>
                <td style="width: 25%; padding: 10px; padding-left: 40px;">
                    <img src="../../models/uploads/sIcon.png" alt="student icon" style="width: 150px;"> <br> <br>
                    <form action="../../controllers/fileUploadCheck.php" method="POST" enctype="multipart/form-data">
                        <label for="myfile">Select image:</label> <br>
                        <input type="file" name="myfile"> <br> <br>
                        <input type="submit" name="submit">
                    </form>
                </td>
                <td style="width: 75%; padding: 20px;">

                    <form action="" method="POST">
                        <fieldset>
                            <legend>My Profile</legend>

                            <table>
                            <tr>
                                    <td>User Type: </td>
                                    <td><input type="text" name="user-type" value="<?=$updateUser[0]?>"></td>
                                </tr>

                                <tr>
                                    <td>Username: </td>
                                    <td><input type="text" name="username" value="<?=$updateUser[1]?>"></td>
                                </tr>

                                <tr>
                                    <td>Name: </td>
                                    <td><input type="text" name="name" value="<?=$updateUser[2]?>"></td>
                                </tr>

                                <tr>
                                    <td>Email: </td>
                                    <td><input type="email" name="email" value="<?=$updateUser[3]?>"></td>
                                </tr>

                                <tr>
                                    <td>Phone: </td>
                                    <td><input type="text" name="phone" value="<?=$updateUser[4]?>"></td>
                                </tr>

                                <tr>
                                    <td>Date of Birth: </td>
                                    <td><input type="date" name="dob" value="<?=$updateUser[5]?>"></td>
                                </tr>

                                <tr>
                                    <td>Gender: </td>
                                    <td>
                                        <input type="text" name="gender" value="<?=$updateUser[6]?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Address: </td>
                                    <td><input type="" name="address" value="<?=$updateUser[7]?>"></td>
                                </tr>

                                <tr>
                                    <td>Password: </td>
                                    <td><input type="password" name="password" value="<?=$updateUser[8]?>"></td>
                                </tr>

                                <tr>
                                    <td>Confirm Password: </td>
                                    <td><input type="password" name="cPassword" value="<?=$updateUser[9]?>"></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="submit" name="update" value="Update">
                                    </td>
                                </tr>

                            </table>
                        </fieldset>
                    </form>

                </td>
            </tr>
        </table>

    </div>

</body>

</html>