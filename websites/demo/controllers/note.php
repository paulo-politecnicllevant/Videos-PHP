<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Notes';

$notes = $db->query('SELECT * FROM notes where id = :id', ['id' => $_GET['id']])->fetch();

//dd($notes);

require "views/note.view.php";