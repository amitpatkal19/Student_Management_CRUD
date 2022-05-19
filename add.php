<?php
if(isset($_REQUEST['create']))
{
    $stName=$_POST['stName'];
    $DOB=$_POST['DOB'];
    $Address=$_POST['Address'];
    $mobileNumber=$_POST['mobileNumber'];
    $sql= "INSERT INTO `st_details` ( `name`, `dob`, `address`, `mobile_no`) VALUES ('$stName', '$DOB', '$Address', '$mobileNumber');";

    if($conn->query($sql)==true)
    {
        echo "Data Inserted Successfully";
    }
    else
    {
        echo "ERROR: $sql <br> $conn->error";
    }
}
?>