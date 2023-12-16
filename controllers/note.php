<?php

$heading = "Note Details";
$title = "Note";
$id = $_GET['id'] ?? null;
$cureentUser = 1;

$config = require 'config.php';
$db = new Database($config['database']);


$note = $db->query('select * from notes where id = :id', [ 'id' => $id])->fetch();

if (!$note) {
    abort();
}

if ($note['user_id'] === $cureentUser) {
    abort(Response::NOTAUTHORISED);
}


require 'views/note.view.php';