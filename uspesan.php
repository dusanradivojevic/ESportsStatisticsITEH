<?php
session_start();
echo "Uspesan login\n";
if(isset($_SESSION['login_user'])) {
    echo "Setovan\n";
}
else
{
    echo "nije setovan\n";
}
?>
<a href="index.php">nazad na index</a>