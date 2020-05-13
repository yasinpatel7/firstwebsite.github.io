<?php
    session_start();
?>
<?php
    unset($_SESSION['email']);
    session_destroy();
    header("Location:index.html");
?>