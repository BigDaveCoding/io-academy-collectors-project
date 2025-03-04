<?php
declare(strict_types=1);
require_once 'src/services/DatabaseConnectionService.php';
require_once 'src/models/PostsModel.php';
require_once 'src/services/DisplayPostsService.php';

$db = DatabaseConnectionService::connect();

$postsModel = new PostsModel($db);

echo "<pre>";
//var_dump($postsModel);
//var_dump($postsModel->getAllPosts());
echo "</pre>";
//echo DisplayPostsService::allPosts($postsModel->getAllPosts());

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
    <section>
        <?php
            echo DisplayPostsService::allPosts($postsModel->getAllPosts());
        ?>
    </section>
</body>
</html>
