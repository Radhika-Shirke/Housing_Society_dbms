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

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color:aqua;
  color: blue;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: aqua;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 25%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
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

<form class="form" action="" method="post">
        <div style="margin-left:25%;padding:1px 16px;height:1000px;" class="container">
            <h1>Wing Registration</h1>
            <p>Please fill in this form to add a Wing.</p>

            <label for="name" style="color: lime"><b></b>Wing Name</b></label>
            <input type="text" class="login-input" name="Wing Name" placeholder="Wing Name" required />
            <br>

            <label for="email" style="color: lime"><b>No. of Houses</b></label>
            <input type="text" class="login-input" name="No. of Houses" placeholder="No. of Houses">
            <br>

            <label for="email" style="color: lime"><b>Address</b></label>
            <input type="text" class="login-input" name="Address" placeholder="Address">
            <br>

            <label for="email" style="color: lime"><b>City</b></label>
            <input type="text" class="login-input" name="City" placeholder="City">
            <br>

            <label for="email" style="color: lime"><b>Pincode</b></label>
            <input type="text" class="login-input" name="Pincode" placeholder="Pincode">
            <br>


            <input type="submit" name="submit" value="Submit" class="login-button" style="background-color:aqua; color: blue; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%;
            opacity: 0.9;">
        </div>
    </form>

</body>
</html>
