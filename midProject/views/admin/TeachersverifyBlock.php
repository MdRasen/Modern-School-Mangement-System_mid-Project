<?php
    require("../../controllers/header.php");

    $username = $_REQUEST["username"];

    $file = fopen("../../models/teacherList.txt", "r");
                while(!feof($file)){
                    $user = fgets($file);

                    //echo $user;

                    $userArray = explode("|", $user);
                    if($userArray[1] == $username){

                        $updateUser = $userArray;
                        break;
                    }    
                }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Verify/Block</title>
</head>

<body>

<center>
<form action="../../controllers/verifyBlockCheck.php" method="POST">
        <fieldset>
            <legend>Teachers Verify/Block</legend>

            <table>
                <tr>
                <td><label for="users">User Type:</label></td>
                    <td><select name="users" >
                            <option value="admin" <?php if($userArray[0] == "admin"){echo "selected";} ?>>Admin</option>
                            <option value="teacher" <?php if($userArray[0] == "teacher"){echo "selected";} ?>>Teacher</option>
                            <option value="student" <?php if($userArray[0] == "student"){echo "selected";} ?>>Student</option>
                        </select></td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" value="<?=$userArray[1]?>"></td>
                </tr>

                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" value="<?=$userArray[2]?>"></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="email" value="<?=$userArray[3]?>"></td>
                </tr>

                <tr>
                    <td>Phone: </td>
                    <td><input type="text" name="phone" value="<?=$userArray[4]?>"></td>
                </tr>

                <tr>
                    <td>Date of Birth: </td>
                    <td><input type="date" name="dob" value="<?=$userArray[5]?>"></td>
                </tr>

                <tr>
                <td>Gender: </td>
                    <td><input type="radio" name="gender" value="male" <?php if($userArray[6] == "male"){echo "checked";} ?>> Male
                        <input type="radio" name="gender" value="female" <?php if($userArray[6] == "female"){echo "checked";} ?>> Female
                        <input type="radio" name="gender" value="others" <?php if($userArray[6] == "others"){echo "checked";} ?>> Others
                    </td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td><input type="" name="address" value="<?=$userArray[7]?>"></td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" value="<?=$userArray[8]?>"></td>
                </tr>

                <tr>
                    <td>Confirm Password: </td>
                    <td><input type="password" name="cPassword" value="<?=$userArray[9]?>"></td>
                </tr>

                <tr>
                    <td><label for="action">Action:</label></td>
                    <td><select name="action">
                            <option value="verify">Verify</option>
                            <option value="block">Block</option>
                        </select></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="confirm" value="confirm">
                    </td>
                </tr>

            </table>
        </fieldset>
    </form>
</center>

</body>

</html>