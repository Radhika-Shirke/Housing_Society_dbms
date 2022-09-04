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



</body>
</html>
