<?php

namespace Http\Notes;
use Core\App;
use Core\Database;
use Http\Notes\NoteDAOImpl;

class NoteFactory
{
    public static function create()
    {
        return new NoteDAOImpl(App::resolve(Database::class));
    }
}