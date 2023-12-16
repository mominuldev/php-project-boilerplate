<?php

$heading = "All Notes";
$title = "Notes";

$config = require 'config.php';
$db = new Database($config['database']);

$notes = 'select * from notes where user_id = 2';

$notes = $db->query($notes)->fetchAll();


require 'views/notes.view.php';