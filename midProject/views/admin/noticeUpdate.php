<?php
    require("../../controllers/header.php");

    $class_id = $_REQUEST["notice_id"];

    $file = fopen("../../models/noticeList.txt", "r");
                while(!feof($file)){
                    $user = fgets($file);

                    //echo $user;

                    $userArray = explode("|", $user);
                    if($userArray[0] == $class_id){

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
    <title>Notice Update</title>
</head>

<body>

<center>
<form method="POST">
<fieldset>
            <legend>Notice Update</legend>

            <table>

                <tr>
                    <td>Notice ID: </td>
                    <td><input type="text" name="notice_id" value="<?=$userArray[0]?>"></td>
                </tr>

                <tr>
                    <td>Title: </td>
                    <td><input type="text" name="title" value="<?=$userArray[1]?>"></td>
                </tr>

                <tr>
                    <td><label for="recipient">Recipient:</label></td>
                    <td><select name="recipient" >
                            <option value="everyone">Everyone</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select></td>
                </tr>

                <tr>
                    <td>Date: </td>
                    <td><input type="date" name="date" value="<?=$userArray[3]?>"></td>
                </tr>

                <tr>
                    <td>Notice: </td>
                    <td><textarea name="notice" id="" cols="30" rows="10"><?=$userArray[4]?></textarea></td>
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
</center>

</body>

</html>