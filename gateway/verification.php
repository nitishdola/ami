<?php
$customer_id = $_POST['customer_id'];

$success = true;
/*
$statement = $pdo->prepare("
	SELECT *
		FROM ami_delegates
	INNER JOIN ami_delegate_guests
		ON ami_delegates.id = ami_delegate_guests.delegate_id
	WHERE ami_delegates.id = :delegate_id
");
$statement->execute(array(':delegate_id' => $delegate_id));
$row = $statement->fetch();
var_dump($row);*/