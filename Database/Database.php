<?php

class Database
{
    public function select(int $limit): array
    {
        try {
            $users = json_decode(file_get_contents(DB_FILE), true);
            $users = array_slice($users, 0, $limit );
            return $users;
        } catch (\Throwable $e) {
            throw New Exception($e->getMessage());
        }
        return false;
    }
}
