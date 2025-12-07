<?php
require 'db.php';

$result = $conn->query("SELECT * FROM donor ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>DONOR List</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2>DONOR List</h2>
    <a href="add_contact.php" class="btn btn-success mb-3">Add New DONOR</a>

    <?php if ($result->num_rows > 0): ?>
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>Name</th><th>BLOOD-GROUP</th><th>CONTACT</th><th>CITY</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($contact = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($contact['name']) ?></td>
                    <td><?= htmlspecialchars($contact['blood_grup']) ?></td>
                    <td><?= htmlspecialchars($contact['contact']) ?></td>
                    <td><?= htmlspecialchars($contact['city']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $contact['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $contact['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this DONOR?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php else: ?>
        <p>No DONOR found. Add some!</p>
    <?php endif; ?>
</div>

</body>
</html>
