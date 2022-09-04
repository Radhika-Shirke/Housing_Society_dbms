<!DOCTYPE html>
<html>
<head>

<title>Admin Login</title>
<link rel="stylesheet"  type="text/css" href="style.css">

<style>
body {
background-repeat: no-repeat;
background-attachment: fixed; 
background-size: 100% 100%;
}
</style>
</head>
<body>

<p class="logo">Housing Society Management</p>

        <nav>
            <ul>
                <li><a href="login.php">Home</a></li>
                <li><a href="login_admin.php">Admin</a></li>
            </ul>
        </nav>


<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `admin` WHERE username='$username'
                     AND password='" . $password. "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard_admin.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login_admin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <div class="container">
            <h1>Admin Login</h1>
            <p>Please fill in this form to login</p>

            <label for="name" style="color: black"><b></b>Username</b></label>
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
            <br>

            <label for="psw" style="color: black"><b>Password</b></label>
            <input type="password" class="login-input" name="password" placeholder="Password"/>
            <br>


            <input type="submit" value="Login" name="submit" class="login-button" style="background-color:aqua; color: blue; padding: 14px 20px; margin: 8px 0; margin-left:69px; border: none; cursor: pointer; width: 20%;
            opacity: 0.9;"/>
            <br>
        </div>
  </form>
<?php
    }
?>
    

</body>
</html>