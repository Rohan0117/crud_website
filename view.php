<?php
    include "config.php";

    $sql = "SELECT * FROM `users`";

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- <button class = "btn btn-primary my-5"><a href ="create.php">Add User</a></button> -->
        <a href ="create.php" class = "btn btn-primary my-5">Add User</a>
    </div>

    <div class="container">
        <h2>Users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                
?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><a class="btn btn-info" href="update.php?updateid=<?php echo $row['id']; ?>">Update</a>
                    &nbsp;<a class="btn btn-danger" href="delete.php?deleteid=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
<?php
                    }
                }
?>
            </tbody>
        </table>
    </div>
</body>
</html>