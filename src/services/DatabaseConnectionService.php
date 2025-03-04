<?php

declare(strict_types=1);

class DatabaseConnectionService
{
    static public function connect(): PDO
    {
        $db = new PDO('mysql:host=DB;dbname=solo_blog_project', 'root', 'password');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    }
}