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

if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    $id = intval($_POST['id']);
    $sql = "DELETE FROM registrations WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    exit;
}

$result = $conn->query("SELECT * FROM registrations");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="styles1.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Home Button -->
    <form action="index.php" method="get">
        <button type="submit">Home</button>
    </form>
    <h3>Admin Page</h3>

    <table border="2" id="registrationsTable">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr id="row-<?php echo $row['id']; ?>">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                <button class="delete-btn" data-id="<?php echo $row['id']; ?>">Delete</button>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <script>
    $(document).ready(function() {
        $('.delete-btn').on('click', function() {
            var id = $(this).data('id');
            if(confirm('Are you sure you want to delete this record?')) {
                $.post('admin.php', { action: 'delete', id: id }, function(response) {
                    alert(response);
                    $('#row-' + id).remove();
                });
            }
        });
    });
    </script>
</body>
</html>

<?php
$conn->close();
?>
