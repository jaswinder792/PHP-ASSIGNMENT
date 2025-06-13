<?php
// Include the database connection
include 'db.php';

// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get and sanitize the form inputs to prevent XSS and extra whitespace
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $course = htmlspecialchars(trim($_POST['course']));
    $grade = htmlspecialchars(trim($_POST['grade']));

    // SQL query with placeholders to insert data safely into the database
    $sql = "INSERT INTO subscribers (name, email, course, grade) VALUES (?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $pdo->prepare($sql);

    try {
        // Execute the prepared statement with actual values
        $stmt->execute([$name, $email, $course, $grade]);

        // Redirect to the display page after successful insertion
        header("Location: display.php");
        exit(); // Stop further script execution after redirection
    } catch (PDOException $e) {
        // Display an error message if insertion fails
        echo "Error inserting data: " . $e->getMessage();
    }
}
?>
