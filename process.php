<?php
  $conn = mysqli_connect("localhost", "root", "11111111");
  mysqli_select_db($conn,"board");
  $sql = "INSERT INTO board (title, author, content, date) VALUES ('".$_POST['title']."','".$_POST['author']."','".$_POST['content']."',NOW())";
  mysqli_query($conn, $sql);
  header('Location: /boardList.php');
 ?>
