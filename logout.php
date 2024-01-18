<?php

  // Inialize session
  session_start();

// Delete certain session
   unset($_SESSION['driver_id']);
  unset($_SESSION['username']);
  unset($_SESSION['fullname']);
//   unset($_SESSION['owner_email']);
  // Delete all session variables

  session_destroy();

 // Jump to login page
 header('Location: login.php');
 ?>
