<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Registration Page</title>
</head>

<body>

<center>
<form action="../../controllers/classsRegCheck.php" method="POST">
        <fieldset>
            <legend>Class Registration Form</legend>

            <table>

                <tr>
                    <td>Class ID: </td>
                    <td><input type="text" name="class_id"></td>
                </tr>

                <tr>
                    <td><label for="class">Class:</label></td>
                    <td><select name="class" >
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="03">04</option>
                            <option value="03">05</option>
                        </select></td>
                </tr>

                <tr>
                    <td><label for="section">Section:</label></td>
                    <td><select name="section" >
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select></td>
                </tr>

                <tr>
                    <td>Room Number: </td>
                    <td><input type="text" name="room"></td>
                </tr>

                <tr>
                    <td>Teacher: </td>
                    <td><input type="text" name="teacher"></td>
                </tr>

                <tr>
                    <td>Teacher Phone: </td>
                    <td><input type="phone" name="phone"></td>
                </tr>

                <tr>
                    <td>Teacher Email: </td>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="register" value="Register">
                    </td>
                </tr>

            </table>
        </fieldset>
    </form>
</center>

</body>

</html>