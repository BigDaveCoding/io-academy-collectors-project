<?php
declare(strict_types=1);
require_once 'src/services/DatabaseConnectionService.php';
require_once 'src/models/PostsModel.php';

$db = DatabaseConnectionService::connect();

$postsModel = new PostsModel($db);

echo "<pre>";
var_dump($postsModel);
var_dump($postsModel->getAllPosts());
