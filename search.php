<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Donor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Search for Blood Donors</h2>

<form method="GET">
    <input type="text" name="blood_group" placeholder="Blood Group">
    <input type="text" name="city" placeholder="City">
    <button type="submit">Search</button>
</form>

<?php
if (!empty($_GET['blood_group']) || !empty($_GET['city'])) {
    $blood_group = $_GET['blood_group'];
    $city = $_GET['city'];

    $query = "SELECT * FROM donors WHERE 
              blood_group LIKE '%$blood_group%' AND 
              city LIKE '%$city%'";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr><th>Name</th><th>Blood Group</th><th>Contact</th><th>City</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['blood_group']}</td>
                    <td>{$row['contact']}</td>
                    <td>{$row['city']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No donors found.</p>";
    }
}
?>

</body>
</html>
