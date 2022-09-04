<?php

include("db.php");
error_reporting(0);

$hid=$_GET['hid'];
$result=mysqli_query($con, "SELECT* from wing_c where HID=$hid");

while($res = mysqli_fetch_array($result))
{
    $Type = $_GET['type'];
    $Owner = $_GET['owner'];
    $Details = $_GET['details'];

}
?>

<?php

if(Isset($_POST['update']))
{
    $hid=$_POST['hid'];
    $Type=$_POST['type'];
    $Owner=$_POST['owner'];
    $Details=$_POST['details'];

    $result = mysqli_query($con, "UPDATE wing_c SET House_Type='$Type',Owner_Name='$Owner',Details='$Details' WHERE HID=$hid");

    if($result)
    {
        echo "<script>alert('Record Updated')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/soc_mgmt/wing_c.php">
<?php
    }
    else
    {
        echo "Failed to Update";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
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
    <form class="form" method="post" name="login" action="">
        <div class="container">
            <h1>Edit/Update</h1>
            <p>Please fill in this form to update</p>

            <label for="name" style="color: black"><b></b>Type </b></label>
            <input type="text" class="login-input" value="<?php echo "$Type"?>" name="type" />
            <br>

            <label for="name" style="color: black"><b></b>Owner </b></label>
            <input type="text" class="login-input" value="<?php echo "$Owner"?>" name="owner" />
            <br>

            <label for="name" style="color: black"><b></b>Details</b></label>
            <input type="text" class="login-input" value="<?php echo "$Details"?>" name="details"/>
            <br>

            <input type="hidden" class="login-input" value="<?php echo $_GET['hid']?>" name="hid" />
            <br>

            <input type="submit" value="Update" name="update" class="login-button" style="background-color:aqua; color: blue; padding: 14px 20px; margin: 8px 0; margin-left:50px; border: none; cursor: pointer; width: 20%;
            opacity: 0.9;"/>
            
        </div>
  </form>
  

</body>
</html>

<?php

if(isset($_GET['submit']))
{
    $Hid = $_GET['hid'];
    $Blockno = $_GET['blockno'];
    $Type = $_GET['type'];
    $Owner = $_GET['owner'];
    $Details = $_GET['details'];

    $query = "UPDATE wing_c set House_Type='$Type', Owner_Name='$Owner', Details='$Details' where HID='$Hid'";
    $data = mysqli_query($con,$query);

    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
    }
    else
    {
        echo "Failed to Update Record";
    }
}

?>
