<?php
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/db.php";

    $email = $mysqli->real_escape_string($_POST["email"]);
    $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $email);

    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($_POST["password"], $user["password"])) {
            session_start();
            session_regenerate_id(); //Prevents session fixation attack
            $_SESSION["user_id"] = $user["id"];
            if ($user['role'] ==="admin"){
              header("Location: admin.php");
            }else{
            header("Location: index.php");
            };
            exit;
        }
    }

    $is_invalid = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body class="align">
    <div class="grid">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form login">
            <header class="login__header">
                <h3 class="login__title">Login</h3>
            </header>
            <div class="login__body">
                <div class="form__field">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="form__field">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
            </div>
            <footer class="login__footer">
                <input type="submit" value="Login">
                <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
            </footer>
        </form>
    </div>
    <?php if ($is_invalid): ?>
        <p>Invalid email or password</p>
    <?php endif; ?>
</body>
</html>
