<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donor Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Register as Blood Donor</h2>

<form action="" method="POST">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="text" name="blood_group" placeholder="Blood Group (A+, B-, O+)" required>
    <input type="text" name="contact" placeholder="Contact Number" required>
    <input type="text" name="city" placeholder="City" required>
    <button type="submit" name="register">Register</button>
</form>

<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $sql = "INSERT INTO donors (name, blood_group, contact, city)
            VALUES ('$name', '$blood_group', '$contact', '$city')";

    if ($conn->query($sql)) {
        echo "<p class='success'>Donor Registered Successfully!</p>";
    } else {
        echo "<p class='error'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
