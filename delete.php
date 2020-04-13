<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
       $resultDelete = mysqli_query($conn, $query);

        if(!$resultDelete){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Task Removed Succesfully';
    $_SESSION['message_type'] = 'warning';

    header("Location: index.php");



 }

?>