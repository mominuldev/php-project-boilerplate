<?php

$heading = "All Notes";
$title = "Notes";

$config = require 'config.php';
$db = new Database($config['database']);

$notes = 'select * from notes where user_id = 1';

$notes = $db->query($notes)->get();


require 'views/notes.view.php';
