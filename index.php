<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">
        <title>Student Management System</title>
        <script src="jquery-3.7.1.min.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <a href="login.php" class="admin-login">Admin Login</a>
            </nav>
            <h1 class="title">Welcome To Student Management System</h1>
        </header>
        <main>
            <form method="POST" action="index.php">
                <table class="student-info">
                    <tr>
                        <th colspan="2">Student Information</th>
                    </tr>
                    <tr>
                        <td>Choose Standard</td>
                        <td>
                            <select name="std" class="std-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter Roll No. </td>
                        <td><input type="text" name="rollno" class="rollno-input"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="submit-cell">
                            <input type="submit" name="submit" value="ShowInfo" class="submit-btn">
                        </td>
                    </tr>
                </table>
            </form>
        </main>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $standard=$_POST['std'];
    $rollno=$_POST["rollno"];
    include('dbcon.php');
    include('Function.php');
    showdetails($standard,$rollno);
}
?>