<?php
include("connection.php");
if(isset($_POST['dlt']))
{
    $grn=$_POST['dlt'];
    $sql= "DELETE FROM st_details WHERE gr_no='$grn'";
    //echo "$grn";
    if($conn->query($sql)==true)
    {
        echo "Data deleted Successfully";
        header('location: index.php');  //from here redirect again to index.php
    }
    else
    {
        echo "ERROR: $sql <br> $conn->error";
    }
}
?>
