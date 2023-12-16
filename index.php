<?php

/**
 * @param $uri
 * @param $routes
 */
require 'functions.php';

/**
 * Database Connection
 */
require 'Database.php';

/**
 * Response Codes
 */
require 'Response.php';

// Single Post
//$id = $_GET['id'] ?? null;
//$query = "select * from notes where id = ?";
//$note = $pdo->query($query, [ $id])->fetch();


// All Posts
//$query = "select * from notes where id = :id";
//$posts = $pdo->query($query)->fetchAll();


/**
 * @param $name
 * @param array $data
 * @return mixed
 */
require 'router.php';


