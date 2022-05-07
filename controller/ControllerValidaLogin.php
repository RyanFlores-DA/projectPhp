<?php 
session_start();
$id = $_SESSION['id'];
$connection = new PDO("mysql:dbname=sistema;host=127.0.0.1", "root", "");
$statement = $connection->prepare("select ag.id,ag.title,ag.description,ag.start,ag.end,ag.status,
ag.user_id,us.login from agenda as ag 
	inner join users as us
    WHERE us.id = '{$id}' and user_id = '{$id}'");
    $statement->execute();

    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($results);
?>
