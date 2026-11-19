<?php

namespace Http\Notes;
use Core\App;
use Core\Database;

class NoteFactory
{
    public static function create()
    {
        return new NoteDAOImpl(App::resolve(Database::class));
    }
}