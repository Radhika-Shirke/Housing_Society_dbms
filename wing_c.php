<html>
<head>
<title>Wing C Records</title>

<style>
a:link, a:visited {
  background-color: aqua;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color:deepskyblue;
}

#members {
  font-family: Arial, Helvetica, sans-serif;
  /*border-collapse: collapse;*/
  width: 90%;
}

#members td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#members tr:nth-child(even){background-color: #f2f2f2;}

#members tr:hover {background-color: #ddd;}

#members th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: aqua;
  color: black;
}
</style>

</head>

<body>

<a style="margin-bottom:2%; margin-left:2%;" href="house_report.php">Back</a>

<table id="members" style="margin-left:2%;" border="2" cellspacing="7">
<tr>
<th>House ID</th>
<th>Block No</th>
<th>Type</th>
<th>Owner</th>
<th>Details</th>
<th colspan="2" align="center">Operation</th>
</tr>

<?php
include("db.php");
error_reporting(0);
$query="SELECT * from wing_c";
$data= mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
    while(($result=mysqli_fetch_array($data)))
    {
        echo "
        <tr>
        <td>".$result['HID']."</td>
        <td>".$result['BlockNo']."</td>
        <td>".$result['House_Type']."</td>
        <td>".$result['Owner_Name']."</td>
        <td>".$result['Details']."</td>
        <td><a href='update_wing_c.php?hid=$result[HID] & blockno=$result[BlockNo] & type=$result[House_Type] & owner=$result[Owner_Name] & details=$result[Details]'>Edit/Update </td>
        <td><a href='delete_wing_c.php?hid=$result[HID]' onclick='return checkdelete()'>Delete</td>
        ";
    }
    //echo "Table has records";
}
else
{
    echo "No records found";
}

?>
</table>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this Record');
    }
</script>

</body>
</html>