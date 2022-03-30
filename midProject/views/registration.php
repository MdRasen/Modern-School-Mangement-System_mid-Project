<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>

<body>

<center>
<form action="../controllers/regCheck.php" method="POST">
        <fieldset>
            <legend>Registration Form</legend>

            <table>
                <tr>
                    <td><label for="users">User Type:</label></td>
                    <td><select name="users" >
                            <option value="admin">Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select></td>
                </tr>

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
                    <td><input type="text" name="phone"></td>
                </tr>

                <tr>
                    <td>Date of Birth: </td>
                    <td><input type="date" name="dob"></td>
                </tr>

                <tr>
                    <td>Gender: </td>
                    <td><input type="radio" name="gender" value="male" checked> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="others"> Others
                    </td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td><input type="" name="address"></td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password"></td>
                </tr>

                <tr>
                    <td>Confirm Password: </td>
                    <td><input type="password" name="cPassword"></td>
                </tr>



                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="register" value="Register">
                        <a href="login.php">Already have an account?</a>
                    </td>
                </tr>

            </table>
        </fieldset>
    </form>
</center>

</body>

</html>