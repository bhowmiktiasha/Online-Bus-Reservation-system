<?php
session_start();
session_destroy();

header("Location: user_login_form.php");


//echo "<a href='home.php'>Go to HOME PAGE </a>";

?>
