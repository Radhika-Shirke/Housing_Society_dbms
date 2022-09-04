<?php
//include auth_session.php file on all user panel pages
include("auth_session_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: aqua;
  color: black;
}
</style>
</head>
<body>

<ul>
    <li><a href="add_wing.php">Add Wing</a></li>
    <li><a href="house_report.php">House Report</a></li>
    <li><a href="add_member.php">Add Member</a></li>
    <li><a href="member_report.php">Member Report</a></li>
    <li><a href="logout_admin.php">Logout</a></li>

</ul>

<div class="form" style="margin-left:25%;padding:1px 16px;height:1000px;">  
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now on user dashboard page.</p>
</div>


</body>
</html>
