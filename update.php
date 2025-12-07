<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM donors WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $sql = "UPDATE donors SET 
            name='$name', blood_group='$blood_group',
            contact='$contact', city='$city'
            WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: admin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Donor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Update Donor</h2>

<form method="POST">
    <input type="text" name="name" value="<?= $row['name'] ?>" required>
    <input type="text" name="blood_group" value="<?= $row['blood_group'] ?>" required>
    <input type="text" name="contact" value="<?= $row['contact'] ?>" required>
    <input type="text" name="city" value="<?= $row['city'] ?>" required>
    <button type="submit" name="update">Update</button>
</form>

</body>
</html>
