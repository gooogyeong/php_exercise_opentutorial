<?php 
$safe_title = htmlspecialchars($_POST['title']);
$safe_desc = htmlspecialchars($_POST['description']);
file_put_contents('data/'.$safe_title, $safe_desc);
header('Location: /index.php?id='.$safe_title);
?>