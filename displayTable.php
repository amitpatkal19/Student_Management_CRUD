<?php
include("connection.php");
// Attempt select query execution
$sql = "SELECT * FROM st_details";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>GR</th>";
                echo "<th>Name</th>";
                echo "<th>DOB</th>";
                echo "<th>Address</th>";
                echo "<th>Mobile no.</th>";
                echo "<th>Action</th>";
                echo "<th>Action</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['gr_no'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['mobile_no'] . "</td>";
                echo "<form method='post' action='edit.php'> 
                      <td class='editBtn'><button name='edt' value=".$row['gr_no'].">Edit</button></td>
                      </form> ";  
                echo "<form method='post' action='delete.php'> 
                      <td class='deleteBtn'><button name='dlt' value=". $row['gr_no'].">Delete</button></td>
                      </form> ";           
                echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
