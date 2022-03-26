<?php include "connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Heba</title>
</head>
<body>
    <?php 
    if(isset($_POST['add_event'])){
        $errors = array();
        if (empty($_POST["date"])) {  
            $errors[] = "Date is required";  
        } 
        if (empty($_POST["price"])) {  
            $errors[] = "Price is required";  
        } 
        if (empty($_POST["hours"])) {  
            $errors[] = "Hours is required";  
        } 
        if (empty($_POST["place"])) {  
            $errors[] = "Place is required";  
        } 
        if (empty($_POST["band"])) {  
            $errors[] = "Band is required";  
        } 
        if (empty($_POST["volunteer"])) {  
            $errors[] = "Volunteer is required";  
        } 
        if(count($errors) == 0){
            $date = $_POST['date'];
            $price = $_POST["price"];
            $hours = $_POST["hours"];
            $place = $_POST['place'];
            $band = $_POST['band'];
            $volunteer = $_POST['volunteer'];
            $query = "INSERT INTO event (date, price, hours, place, band, volunteer) 
            VALUES('$date', '$price', '$hours', '$place', '$band', '$volunteer')";
            mysqli_query($conn, $query);
        }
    }
    ?>

    <form method="POST" action="" class="container">
        <h1>Add  Event</h1>
        <hr>
        <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
            <input type="text" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">price</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">hours</label>
            <input type="text" name="hours" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">place</label>
            <input type="text" name="place" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">band</label>
            <input type="text" name="band" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">volunteer</label>
            <input type="text" name="volunteer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <button name="add_event" type="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-primary"> <a href="/dowi/Phase1/Volunteer.php" style="color:white">Home</a> </button>
        <div style=" margin-bottom: 3em;">
        <?php
        foreach($errors as $error){
            echo $error . "<br>";
        }
        ?>
    </div>
    </form>
    
</body>
</html>