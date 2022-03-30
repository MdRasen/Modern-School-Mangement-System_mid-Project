<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Transport Service</title>
</head>

<body>

<center>
<form action="../../controllers/transportCheck.php" method="POST">
        <fieldset>
            <legend>Apply Transport Service</legend>

            <table>

                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username"></td>
                </tr>

                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <td>Phone: </td>
                    <td><input type="phone" name="phone"></td>
                </tr>

                <tr>
                    <td><label for="pickup">Pickup Location:</label></td>
                    <td><select name="pickup" >
                            <option value="Malibagh">Malibagh</option>
                            <option value="Rampura">Rampura</option>
                            <option value="Badda">Badda</option>
                            <option value="Notun Bazar">Notun Bazar</option>
                            <option value="Bashundhara Gate">Bashundhara Gate</option>
                            <option value="Kuril">Kuril</option>
                        </select></td>
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