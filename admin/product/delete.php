<?php
include '../../conn/conect.php';

$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$product = new Product ($pdo);
$product->delete(1);
header("Location: ".$base."/admin/product/form.php");

/*
$sth = $pdo->prepare("DELETE from users where usr_id = :usr_id");
$sth->bindValue("usr_id", $id);
$sth->execute();
*/