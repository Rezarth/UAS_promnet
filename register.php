<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location : index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRegister.css" media="screen" title="no title">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register Akun 7KIDS</title>
</head>
<body>
    <div class="register">
        <?php
            if(isset($_POST["submit"])){
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
                $errors = array();
                if(empty($username) OR empty($email) or empty($password)){
                    array_push($errors, "all fields are required");
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    array_push($errors, "Email is not valid");
                }
                if (strlen($password)<8){
                    array_push($errors, "Password must be at least 8 characters");
                }
                require_once "koneksi.php";
                $sql = "SELECT * FROM tbl_users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0){
                    array_push($errors, "email already exists!");
                }
                if(count($errors)>0){
                    foreach ($errors as $error){
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                }else{
                    require_once "koneksi.php";
                    $sql = "INSERT INTO tbl_users (username, email, password) VALUES ( ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>You are registered successfully</div>";
                    }else{
                        die("Something went wrong");
                    }
                }
            }
        ?>
        <div class="input form-register">
            <form action="register.php" method="post">
                    <h1>REGISTER</h1>
                    <div class="form-group mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-btn mb-3">
                        <input type="submit" name="submit" value="Register" class="btn btn-primary mb-3"></input>
                    </div>
                    <div class="mb-5">
                        <button class="btn goLogin">
                            <P>
                                Sudah punya akun? <a href="login.php">login disini!</a>
                            </P>
                        </button>
                    </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>