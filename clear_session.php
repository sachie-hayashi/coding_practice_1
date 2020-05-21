<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION['previousPage'])) {
  if (basename($_SERVER['PHP_SELF']) != $_SESSION['previousPage']) {
    session_unset();
    session_destroy();
  }
}
?>