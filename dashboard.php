<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  type="text/css" href="style.css">

<style>
body {
/*background-image: url('housing society.jpg');*/
background-repeat: no-repeat;
background-attachment: fixed; 
background-size: 100% 100%;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>

<body>

<p class="logo">Housing Society Management</p>

        <nav>
            <ul>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>

    <div class="form">  
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now on user dashboard page.</p>
    </div>

    
</body>
</html>