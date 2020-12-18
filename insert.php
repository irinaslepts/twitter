<?php 
$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
mysqli_query($connect, "INSERT INTO tweets (author, text, img) VALUES ('".$_GET['author']."', 'img/1.jpg', '".$_GET['text']."')");
 ?>