<?php
    include "config.php";

    $user_id = $_GET['updateid'];
    if(isset($_POST['update'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        
        $sql = "UPDATE `users` SET `firstname`='$firstname', `lastname`='$lastname', `email`='$email',
                                    `password`='$password', `gender`='$gender' WHERE `id`='$user_id'";

        $result = $conn->query($sql);

        if($result == true){
            // echo "Record updated successfully";
            header('Location: view.php');
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if(isset($_GET['updateid'])){

        $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";
        
        $result = $conn->query($sql);
        
        // if($result->num_rows>0){
        //     while($row = $result->fetch_assoc()){
                $row = $result->fetch_assoc();
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $password = $row['password'];
                $gender = $row['gender'];
            // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>
<body>
    <div class="container">
    <h2>Update Form</h2>
    
    <form action="" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <!-- <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"> -->
            firstname<br>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>">
            <br>
            lastname<br>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>">
            <br>
            email<br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br>
            password<br>
            <input type="password" name="password" value="<?php echo $password; ?>">
            <br>
            gender<br>
            <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"; ?>>Male
            <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"; ?>>Female
            <br><br>
            <input type="submit" name="update" value="update">
        </fieldset>
    </form>
    </div>
</body>
</html>

<?php
        // }
        // If the 'id' value is invalid then ridirect the user back to view.php page
        // header('Location: view.php');
    }
?>