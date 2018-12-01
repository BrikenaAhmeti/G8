<?php
$servername = "localhost";
$user = "root";
$pass = "5551";
$name = "dbtest";
  $db = new PDO('mysql:dbname=dbtest;host=127.0.0.1',$user,$pass);
  $emri = $_POST['author'];
  $msg = $_POST['message'];
  $sql = "insert into komentet(AUTHOR,MESSAGE) VALUES ('$emri','$msg') ";
  $user = $db ->prepare("insert into komentet(AUTHOR,MESSAGE) VALUES (:author,:msg)");

  if(isset($_POST['author']) && isset($_POST['message']))
  {
    $user->execute(['author' => $emri, 'msg' => $msg]);
  if($user->rowCount())
  {
    echo "Comment added";
  }
  else {
    echo "Comment not added";
  }
}
else {
  echo "Comment not added";
}
?>
