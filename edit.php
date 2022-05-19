 <?php
session_start();
$_SESSION["editButton"]=$_POST['edt'];
header('location: editWindow.php');
?>




