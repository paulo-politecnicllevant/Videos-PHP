<?php

namespace Http\Notes;
use Core\Database;

class NoteDAOImpl implements NoteDAOInterface
{

    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function allByUserId($userId)
    {
        return $this->db->query(
            'SELECT * FROM notes WHERE user_id = :user_id', [
                'user_id' => $userId
                ]
            )->get();
    }
    
    public function findById($id)
    {
        return $this->db->query(
            'SELECT * FROM notes WHERE id = :id', [
                'id' => $id
                ]
        )->findOrFail();
    }

    public function create($body, $userId)
    {
        $this->db->query(
            'INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
                'body' => $body,
                'user_id' => $userId
            ]
        );
    }

    public function update($id, $userId, $body)
    {
        $this->db->query(
            'UPDATE notes SET body = :body WHERE id = :id AND user_id = :user_id', [
                'id' => $id,
                'user_id' => $userId,
                'body' => $body
            ]
        );
    }

    public function delete($id, $userId)
    {
        $this->db->query(
            'DELETE FROM notes WHERE id = :id AND user_id = :user_id', [
                'id' => $id,
                'user_id' => $userId
            ]
        );
    }
}

