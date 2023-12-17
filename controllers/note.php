<?php


$heading = "Note Details";
$title = "Note";
$id = $_GET['id'] ?? null;
$cureentUser = 1;

$config = require 'config.php';
$db = new Database($config['database']);


$note = $db->query('select * from notes where id = :id', [ 'id' => $id])->findOrFail();


authorize($note['user_id'] == $cureentUser);



require 'views/note.view.php';
