<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylea.css" media="screen" title="no title">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login 7KIDS</title>
</head>
<body>
    <div class="login">
        <?php
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            require_once "koneksi.php";
        
            // Gunakan prepared statement
            $sql = "SELECT * FROM tbl_users WHERE username = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
        
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("location: index.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Username does not match</div>";
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }

        ?>
        <div class = "input kotakLogin">
        <h1>LOGIN</h1>
            <form action = "login.php" method = "post">
                <div class="form-group mb-3">
                    <label class="form-label">Username</label>
                    <input type="username" name="username" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-btn mb-3">
                    <input type="submit" value="Login" name="login" class="btn btn-primary"></input>
                </div>
                <div class="mb-5">
                    <button class="btn goRegister">
                        <P>
                            Belum punya akun? <a href="register.php">Daftar disini!</a>
                        </P>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<html>