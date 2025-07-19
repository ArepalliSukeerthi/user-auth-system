<?php
session_start();
session_destroy();
header("Location: forms/login_form.html");
exit;
?>
