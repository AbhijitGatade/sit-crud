<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body style="background-color:black;color:white;">
    <div class="container">
    <h1>User Master</h1>
    <form action="save.php" method="POST">
    Name: <input type="text" class="form-control" id="name" name="name" required />
    Address: <textarea class="form-control" id="address" name="address" required></textarea>
    Mobile No:<input class="form-control" type="number" id="mobileno" name="mobileno" required />
    Email:<input type="email" class="form-control" id="email" name="email" required />
    Gender: <label><input type="radio" id="male" name="gender" value="Male" required />Male</label>
            <label><input type="radio" id="female" name="gender" value="Female" required />Female</label><br /><br />
    Favourite Topic: <select id="topic" class="form-control" name="topic" required>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="Java">Java</option>
                        <option value="PHP">PHP</option>
                    </select>
    <input type="submit" value="Save" class="btn btn-primary" />
</form>

<?php
    include("connection.php");
    $query = "SELECT * FROM users";
    $result = mysqli_query($con, $query);
?>

    <table class="table table-bordered" style="color:white;">
        <tr>
            <th>Action</th>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Gender</th>
            <th>Favourite Topic</th>
        </tr>
        <?php
            $count = 1;
            while($row = mysqli_fetch_assoc($result))
            {
        ?>
            <tr>
                <td>
                    <a href="edit.php?id=<?php echo $row["id"] ?>">Edit</a>
                    <a onclick="return confirm('Sure to delete?')" href="delete.php?id=<?php echo $row["id"] ?>">Delete</a></td>
                <td><?php echo $count;  ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["mobileno"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><?php echo $row["topic"]; ?></td>
            </tr>

        <?php

                $count++;
            }

        ?>
    </table>
</div>
</body>
</html>