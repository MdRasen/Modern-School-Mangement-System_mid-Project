<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message</title>
</head>

<body>

<center>
<form action="../../controllers/messageSendCheck.php" method="POST">
        <fieldset>
            <legend>Send Message</legend>

            <table>

                <tr>
                    <td>Student Username: </td>
                    <td><input type="text" name="s_username"></td>
                </tr>

                <tr>
                    <td>Teacher Username: </td>
                    <td><input type="text" name="t_username"></td>
                </tr>

                <tr>
                    <td>Topic: </td>
                    <td><input type="text" name="topic"></td>
                </tr>

                <tr>
                    <td>Message: </td>
                    <td><textarea name="message" cols="30" rows="10"></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="send" value="send">
                    </td>
                </tr>

            </table>
        </fieldset>
    </form>
</center>

</body>

</html>