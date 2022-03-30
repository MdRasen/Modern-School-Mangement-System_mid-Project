<?php
    require("../../controllers/header.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Class Notes</title>
</head>

<body>

    <center>
        <form action="../../controllers/notesUploadCheck.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Class Notes Upload</legend>

                <table>

                    <tr>
                        <td>Class ID: </td>
                        <td><input type="text" name="class_id"></td>
                    </tr>

                    <tr>
                        <td><label for="class">Class:</label></td>
                        <td><select name="class">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="03">04</option>
                                <option value="03">05</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td><label for="section">Section:</label></td>
                        <td><select name="section">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td><label for="myfile">Select files:</label></td>
                        <td><input type="file" name="myfile"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="upload" value="Upload">
                        </td>
                    </tr>

                </table>
            </fieldset>
        </form>
    </center>

</body>

</html>