<!DOCTYPE html>
<html>
<head>
    <title>Add Subscriber</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Subscribe</h2>
<form action="submit.php" method="post">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Course:</label><br>
    <input type="text" name="course" required><br><br>

    <label>Grade:</label><br>
    <input type="text" name="grade" required><br><br>

    <input type="submit" value="Submit">
</form>

<br>
<a href="view.php">View All Subscribers</a>
</body>
</html>
