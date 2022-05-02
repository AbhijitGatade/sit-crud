<?php
    include("connection.php");
    $id = $_GET["id"];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
?>
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
    <form action="update.php" method="POST">
        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
    Name: <input type="text" class="form-control" id="name" name="name" value="<?php echo $row["name"]; ?>" required />
    Address: <textarea class="form-control" id="address" name="address" required><?php echo $row["address"] ?></textarea>
    Mobile No:<input class="form-control" type="number" id="mobileno" name="mobileno" value="<?php echo $row["mobileno"]; ?>" required />
    Email:<input type="email" class="form-control" id="email" name="email" required value="<?php echo $row["email"]; ?>" />
    Gender: <label><input type="radio" id="male" name="gender" value="Male" <?php echo $row["gender"] == "Male" ? "checked" : "" ?> required />Male</label>
            <label><input type="radio" id="female" name="gender" value="Female" <?php echo $row["gender"] == "Female" ? "checked" : "" ?> required />Female</label><br /><br />
    Favourite Topic: <select id="topic" class="form-control" name="topic" required>
                        <option value="C" <?php echo $row["topic"] == "C" ? "selected" : "" ?>>C</option>
                        <option value="C++" <?php echo $row["topic"] == "C++" ? "selected" : "" ?>>C++</option>
                        <option value="Java" <?php echo $row["topic"] == "Java" ? "selected" : "" ?>>Java</option>
                        <option value="PHP" <?php echo $row["topic"] == "PHP" ? "selected" : "" ?>>PHP</option>
                    </select>
    <input type="submit" value="Update" class="btn btn-primary" />
</form>
</div>
</body>
</html>