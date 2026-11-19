<?php

namespace Http\Notes;
use Core\Database;

class NoteDaoImpl implements NoteDaoInterface
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

    }

    public function create($body, $userId)
    {

    }

    public function update($id, $userId, $body)
    {

    }

    public function delete($id, $userId)
    {

    }
}

