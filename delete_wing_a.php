<?php

include("db.php");
error_reporting(0);

$hid=$_GET['hid'];
$query = "DELETE from wing_a where HID = '$hid'";

$data = mysqli_query($con,$query);

if($data)
{
    echo "<script>alert('Record Deleted Successfully!')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/soc_mgmt/wing_a.php">
<?php
}
else
{
    echo "<font color='red'>Failed to delete Record";
}

?>