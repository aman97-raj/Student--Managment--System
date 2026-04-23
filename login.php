<?php
session_start();
if (isset($_SESSION['uid'])) {
    header('location: admin/admindash.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h1 align="center">Admin Login</h1>
            <form action="login.php" method="POST">
                <table align="center">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="uname" class="form-input" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" class="form-input" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="login" value="Login" class="btn-submit">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
            if (isset($_POST['login'])) {
                include('dbcon.php');
                $username = mysqli_real_escape_string($con, $_POST['uname']);
                $password = mysqli_real_escape_string($con, $_POST['pass']);
                $qry = "SELECT * FROM user WHERE uname='$username' AND pass='$password'";
                $run = mysqli_query($con, $qry);
                $row = mysqli_num_rows($run);
                if ($row >= 1) {
                    $data = mysqli_fetch_assoc($run);
                    $id = $data['id'];
                    $_SESSION['uid'] = $id;
                    header('location: admin/admindash.php');
                    exit;
                } else {
                    ?>
                    <script>
                        alert("Username or Password Don't match");
                        window.open('login.php', '_self');
                    </script>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</body>
</html>