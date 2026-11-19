<?php

use Core\App;
use Core\Validator;
use Core\Database;

class NotesController{
    private function db()
    {
        return App::resolve(Database::class);
    }

    public function index()
    {
        $notes = $this->db()->query('SELECT * FROM notes WHERE user_id = 1')->get();

        view('notes/index.view.php', [
            'heading' => 'My Notes',
            'notes' => $notes
        ]);
    }
}