<?php
// Include the database connection file
include 'db.php';

try {
    // Run SQL query to select all records from the 'subscribers' table
    $stmt = $pdo->query("SELECT * FROM subscribers");

    // Fetch all results as an associative array
    $subscribers = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Display error message if query fails
    die("Error fetching records: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subscribers List</title> <!-- Title shown in the browser tab -->
    <link rel="stylesheet" href="design.css"> <!-- Link to external CSS file -->
</head>
<body>

<h2>All Subscribers</h2> <!-- Page heading -->

<!-- Create a table to display subscriber data -->
<table>
    <tr>
        <!-- Table headers -->
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Grade</th>
    </tr>

    <!-- Loop through each subscriber and display their info in a table row -->
    <?php foreach ($subscribers as $row): ?>
        <tr>
            <!-- Use htmlspecialchars to safely display user input and prevent XSS -->
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['course']) ?></td>
            <td><?= htmlspecialchars($row['grade']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<br>

<!-- Link to add a new subscriber -->
<a href="add.php">Add New Subscriber</a>

</body>
</html>
