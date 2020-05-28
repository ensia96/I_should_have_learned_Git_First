<?php
rename ('data/'.$_POST['b_title'], 'data/'.$_POST['title']);
file_put_contents('data/'.$_POST['title'], $_POST['contents']);
@header('Location: index.php?id='.$_POST['title'])
?>