<?php
mb_internal_encoding("utf8");

require "DB.php";
$db = new DB();
$pdo = $db->connect();

$stmt = $pdo->prepare($db->insert());

$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['password']);
$stmt->bindValue(4, $_POST['path_filename']);
$stmt->bindValue(5, $_POST['comments']);

//executeでクエリを実行。
$stmt->execute();

//これを記述することで、DBを切断。必要な処理を完了したら、セキュリティ上必ずDBを切断すること。
$pdo = NULL;

header('Location:after_register.html');
?>