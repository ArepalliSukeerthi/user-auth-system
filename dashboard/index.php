<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ../forms/login_form.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
  <a href="../logout.php">Logout</a>
</body>
</html>
