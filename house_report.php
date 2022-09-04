<!DOCTYPE html>
<html>
<head>

<title>House Report</title>

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

.dropbtn {
  background-color: aqua;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: aqua;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: aqua;}
</style>
</head>
<body>

<ul>
    <li><a href="add_wing.php">Add Wing</a></li>
    <li><a href="house_report.php">House Report</a></li>
    <li><a href="add_member.php">Add Member</a></li>
    <li><a href="member_report.php">Member Report</a></li>
    <li><a href="soc_mgmt/logout_admin.php">Logout</a></li>

</ul>


<div class="dropdown" style="margin-left:26%;padding:1px 16px;height:1000px; margin-top:50px">
  <button class="dropbtn">Select Wing</button>
  <div class="dropdown-content">
    <a href="wing_a.php">A</a>
    <a href="Wing_b.php">B</a>
    <a href="Wing_c.php">C</a>
  </div>
</div>


</body>
</html>
