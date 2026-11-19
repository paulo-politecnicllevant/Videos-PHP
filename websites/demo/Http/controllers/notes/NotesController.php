<?php

use Core\App;
use Core\Validator;
use Core\Database;

class NotesController{
    private function db()
    {
        return App::resolve(Database::class);
    }
}