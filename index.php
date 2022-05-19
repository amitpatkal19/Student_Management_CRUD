<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Employee Managemnt</title>
</head>



<body>
<h1>CRUD Student Management</h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<form action="index.php" method="post">
    <label>Student Name</label> <input type="text" name="stName" > <br>
    <label>Birthdate</label> <input type="date" name="DOB" > <br>
    <label>Address</label> <input type="text" name="Address"> <br>
    <label>Mobile Number</label> <input type="number" name="mobileNumber"> <br>
    <button name="create">create</button>
</form>
</table>

<?php 
    include 'connection.php';
    include 'add.php';
    include 'displayTable.php';
?>
</body>
</html>

