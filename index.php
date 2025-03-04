<?php
declare(strict_types=1);
session_start();
require_once 'src/services/DatabaseConnectionService.php';
require_once 'src/models/PostsModel.php';
require_once 'src/services/DisplayPostsService.php';
require_once 'src/services/NavBarService.php';

$db = DatabaseConnectionService::connect();

$postsModel = new PostsModel($db);

$_SESSION['loggedIn'] = false;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <?php
            echo NavBarService::display($_SESSION['loggedIn']);
            echo DisplayPostsService::allPosts($postsModel->getAllPosts());
        ?>
</body>
</html>
