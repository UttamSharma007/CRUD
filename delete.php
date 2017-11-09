<?php
/* Including the connection file. */
include("config.php");

$id = $_GET['id'];

/* Deleting the row from table. */
$result = mysqli_query($conn, "DELETE FROM users WHERE id=$id");

/* Redirecting to the display page. */
header("Location:index.php");
?>

