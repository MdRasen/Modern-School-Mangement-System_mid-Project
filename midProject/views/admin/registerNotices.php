<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Form</title>
</head>

<body>

<center>
<form action="../../controllers/regNoticeCheck.php" method="POST">
        <fieldset>
            <legend>Notice Form</legend>

            <table>

                <tr>
                    <td>Notice ID: </td>
                    <td><input type="text" name="notice_id"></td>
                </tr>

                <tr>
                    <td>Title: </td>
                    <td><input type="text" name="title"></td>
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
                    <td><input type="date" name="date"></td>
                </tr>

                <tr>
                    <td>Notice: </td>
                    <td><textarea name="notice" cols="30" rows="10"></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="post" value="Post">
                    </td>
                </tr>

            </table>
        </fieldset>
    </form>
</center>

</body>

</html>