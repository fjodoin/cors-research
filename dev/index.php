<?php
if(isset($_GET['html'])){
    echo $_GET['html'];
}

if(isset($_GET['id'])){
    include 'article.php';
}
?>
