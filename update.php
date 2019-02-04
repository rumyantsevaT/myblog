<?php
//var_dump($_GET, $_POST);die;

require "./database/QueryBuilder.php";
$db = new QueryBuilder();

$db->updateOne("breeds", $id);

header("Location: /");
?>
