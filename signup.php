<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign up</title>
</head>
<body>
    <div class="container">
        <h2>Signup</h2>
        <form method="post">
            Username: <br>
            <input type="text" name="username" value="<?=htmlentities($username) ?>"><br><br>

            Email: <br>
            <input type="text" name="email" value="<?=htmlentities($email) ?>"><br><br>

            Password: <br>
            <input type="password" name="password"><br><br>

            Confirm Password: <br>
            <input type="password" name="confirmpassword"><br><br>

            <button type="submit">Signup</button>
        </form>
    </div>
</body>
</html>