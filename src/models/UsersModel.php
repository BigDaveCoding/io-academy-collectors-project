<?php

declare(strict_types=1);
require_once 'src/entities/UserEntity.php';

class UsersModel
{
    public PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function searchByUsername(string $username) : UserEntity|false
    {
        $query = $this->db->prepare("SELECT * FROM `users` WHERE `username` = :username;");
        $query->setFetchMode(PDO::FETCH_CLASS, UserEntity::class);
        if ($query->execute(["username" => $username])) {
            return $query->fetch();
        } else {
            throw new Exception("User not found");
        }
    }

//    public function getLoginDetails(int $id) : UserEntity
//    {
//        $query = $this->db->prepare("SELECT * FROM `users` WHERE id = :id;");
//        $query->setAttribute(PDO::FETCH_CLASS, UserEntity::class);
//        if ($query->execute([':id' => $id])) {
//            return $query->fetch();
//        } else {
//            throw new Exception("User not found");
//        }
//    }
}