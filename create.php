<?php
    include "config.php";

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
    

    $sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender')";
        
    $result = $conn->query($sql);

    if($result == true){
        // echo "New record created Successfully.";
        header('Location: view.php');
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->connect_error;
        // die(mysqli_error($conn));
        // both line perform same operation.
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Form</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="container">
    <h2>Signup Form</h2>

    <form action="" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            firstname<br>
            <input type="text" name="firstname" autocomplete = "off"><br>
            lastname<br>
            <input type="text" name="lastname" autocomplete = "off"><br>
            email<br>
            <input type="email" name="email" autocomplete = "off"><br>
            password<br>
            <input type="password" name="password" autocomplete = "off"><br>
            gender<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
    </div>
</body>
</html>