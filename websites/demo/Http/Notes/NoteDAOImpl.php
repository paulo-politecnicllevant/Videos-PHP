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

