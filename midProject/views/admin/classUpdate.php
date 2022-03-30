<?php
    require("../../controllers/header.php");

    $class_id = $_REQUEST["class_id"];

    $file = fopen("../../models/classList.txt", "r");
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
    <title>Class Update</title>
</head>

<body>

<center>
<form method="POST">
        <fieldset>
            <legend>Class Update</legend>

            <table>
                
            <tr>
                    <td>Class ID: </td>
                    <td><input type="text" name="class-id" value="<?=$userArray[0]?>"></td>
                </tr>

                <tr>
                    <td><label for="class">Class:</label></td>
                    <td><select name="class" >
                            <option value="01" <?php if($userArray[1] == "1"){echo "selected";} ?>>01</option>
                            <option value="02" <?php if($userArray[1] == "2"){echo "selected";} ?>>02</option>
                            <option value="03" <?php if($userArray[1] == "3"){echo "selected";} ?>>03</option>
                            <option value="03" <?php if($userArray[1] == "4"){echo "selected";} ?>>04</option>
                            <option value="03" <?php if($userArray[1] == "5"){echo "selected";} ?>>05</option>
                        </select></td>
                </tr>

                <tr>
                    <td><label for="section">Section:</label></td>
                    <td><select name="section" >
                            <option value="A" <?php if($userArray[2] == "A"){echo "selected";} ?>>A</option>
                            <option value="B" <?php if($userArray[2] == "B"){echo "selected";} ?>>B</option>
                            <option value="C" <?php if($userArray[2] == "C"){echo "selected";} ?>>C</option>
                        </select></td>
                </tr>

                <tr>
                    <td>Room Number: </td>
                    <td><input type="text" name="room" value="<?=$userArray[3]?>"></td>
                </tr>

                <tr>
                    <td>Teacher: </td>
                    <td><input type="text" name="teacher" value="<?=$userArray[4]?>"></td>
                </tr>

                <tr>
                    <td>Teacher Phone: </td>
                    <td><input type="phone" name="phone" value="<?=$userArray[5]?>"></td>
                </tr>

                <tr>
                    <td>Teacher Email: </td>
                    <td><input type="email" name="email" value="<?=$userArray[6]?>"></td>
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