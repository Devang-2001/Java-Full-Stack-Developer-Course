<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrollments";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM registrations WHERE id=$id");
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $sql = "UPDATE registrations SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: admin.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>

<h3>Update Record</h3>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br>
    <label for="phone">Phone: </label>
    <input type="tel" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required><br><br>
    <button type="submit" name="update">Update</button>
</form>

</body>
</html>
