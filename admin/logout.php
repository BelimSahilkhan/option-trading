<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['email']);

session_destroy();
echo "<script>
alert('You are logout successfully');
window.location='index.php';
</script>";
?>