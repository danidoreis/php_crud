<?php
include("db.php");

if (isset($_POST['save'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task (title, description) VALUES ('$title', '$description')";

    $resultSave = mysqli_query($conn, $query);

    if(!$resultSave){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Saved Succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");

    
}

?>