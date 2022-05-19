<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Window</title>
</head>
<body>
    <form action="editWindow.php" method="post" id="frm">
        <!-- <label>Gr Number   </label><input name="gr" id="grEditWindow"> <br> -->
        <label>Student Name</label> <input type="text" name="stName" > <br>
        <label>Birthdate</label> <input type="date" name="DOB" > <br>
        <label>Address</label> <input type="text" name="Address"> <br>
        <label>Mobile Number</label> <input type="number" name="mobileNumber"> <br>
        <button name="editWin">Edit</button>
    </form>
</body>
</html>


<?php
include "connection.php";
session_start();
if(isset($_REQUEST['editWin']))
{
    $GR=$_SESSION["editButton"];
    echo $GR;
    $stName=$_POST['stName'];
    $DOB=$_POST['DOB'];
    $Address=$_POST['Address'];
    $mobileNumber=$_POST['mobileNumber'];
    
    $sql= "UPDATE st_details SET name='$stName' , dob='$DOB', address='$Address', mobile_no='$mobileNumber' WHERE gr_no='$GR'";

    if($conn->query($sql)==true)
    {
        echo "Data Updated Successfully";
    }
    else
    {
        echo "ERROR: $sql <br> $conn->error";
    }
    header('location: index.php');
}
?> 
