<?php
include("connection.php");

if(isset($_POST['delete_event'])){
    $id = $_POST['id'];
    echo $id;
    $sql = "DELETE FROM event WHERE id='$id'";
    mysqli_query($conn, $sql);
}
header("location: admin.php");
?>