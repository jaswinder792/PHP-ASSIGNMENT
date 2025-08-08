<?php
require '../includes/db.php';
require '../includes/header.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome, <?= htmlspecialchars($_SESSION['user']['username']) ?>!</h2>

<p>This is your dashboard. You can create your profile below or view/update your existing one.</p>

<a href="create_profile.php">+ Create Profile</a> |
<a href="view_profiles.php">View All Profiles</a>

<?php include '../includes/footer.php'; ?>
