<!DOCTYPE html>
<html>
<head><title>Login</title>
<link rel="stylesheet" href="css/style.css"></head>
<body>
    <div class="container">

        <h2>Login</h2>

        <?php foreach ($errors as $e) echo "<p style='color:red;'>$e</p>"; ?>

        <form method="post">

            Username: <br>
            <input type="text" name="username" value="<?= htmlentities($username) ?>"><br><br>

            Password: <br>
            <input type="password" name="password"><br><br>

            <button type="submit">Login</button>

        </form>
    </div>

</body>
</html>