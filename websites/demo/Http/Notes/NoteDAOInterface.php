<?php

interface NoteDAOInterface
{
    public function allByUserId($userId);
    public function findById($id);
    public function create($body, $userId);
    public function update($id, $userId, $body);
    public function delete($id, $userId);
}