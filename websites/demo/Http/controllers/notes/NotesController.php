<?php

use Core\App;
use Core\Validator;
use Core\Database;

class NotesController
{
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

    public function show()
    {
        $currentUserId = 1;

        $note = $this->db()->query('SELECT * FROM notes where id = :id', [
            'id' => $_GET['id']
        ])->findOrFail();

        //authorize($note['user_id'] === $currentUserId);

        view("notes/show.view.php", [
            'heading' => 'Notes',
            'note' => $note
        ]);
    }

    public function create()
    {
        view("notes/create.view.php", [
            'heading' => 'Create Note',
            'errors' => []
        ]);
    }

    public function store()
    {
        $errors = [];

        if (! Validator::string($_POST['body'], 1, 1000)) {
            $errors['body'] = 'A body of no more than 1000 characters is required';
        }

        if (! empty($errors)) {
            return view("notes/create.view.php", [
                'heading' => 'Create Note',
                'errors' => $errors
            ]);
        }

        $this->db()->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1,
        ]);

        header('location: /notes');
        die();
    }
}