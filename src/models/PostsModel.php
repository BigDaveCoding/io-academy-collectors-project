<?php
declare(strict_types=1);
require_once "src/entities/PostEntity.php";

class PostsModel
{
    public PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllPosts(): array
    {
        $query = $this->db->prepare("SELECT `posts`.`title`, `posts`.`content`, `posts`.`date_time`, `users`.`username` FROM `posts`
                                            JOIN `users`
	                                            ON `posts`.`user_id` = `users`.`id`
                                            ORDER BY `date_time` DESC;");
        $query->setFetchMode(PDO::FETCH_CLASS, PostEntity::class);
        if ($query->execute()){
            return $query->fetchAll();
        } else {
            throw new Exception("getAllPosts query error");
        }
    }

}