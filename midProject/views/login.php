<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

    <center>
    <form action="../controllers/loginCheck.php" method="POST">
        <fieldset>
            <legend>Login Form</legend>
 
            <table>
            <tr>
                <td><label for="users">User Type:</label></td>
                <td>
                    <select name="users">
                    <option value="admin">Admin</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Username: </td>
                <td><input type="text" name="username"></td>
            </tr>

            <tr>
                <td>Password: </td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="login" value="Login">
                    <a href="registration.php">Create an account?</a>
                </td>
            </tr>

            </table>

        </fieldset>
    </form>
    </center>
    
</body>
</html>