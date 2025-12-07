<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Admin - Manage Donors</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Blood Group</th>
    <th>Contact</th>
    <th>City</th>
    <th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM donors");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['blood_group']}</td>
            <td>{$row['contact']}</td>
            <td>{$row['city']}</td>
            <td>
                <a href='update.php?id={$row['id']}'>Edit</a> | 
                <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Delete record?\")'>Delete</a>
            </td>
          </tr>";
}
?>
</table>
</body>
</html>
