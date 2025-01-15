<?php
    include "config.php";

    if(isset($_GET['deleteid'])){
        $user_id = $_GET['deleteid'];

        $sql = "DELETE FROM `users` WHERE  `id` = '$user_id'";

        $result = $conn->query($sql);

        if($result == true){
            // echo "Record deleted Successfully.";
            header('Location: view.php');
        }
        else{
            echo "Error:" . $sql . "<br>" . $conn->connect_error;
            // die(mysqli_error($conn));
            // both line perform same operation.
        }
    }

?>