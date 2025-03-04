<?php
declare(strict_types=1);

class DisplayPostsService
{
    static public function allPosts(array $posts) : string
    {
        $output = "<section class='container lg:w-1/2 mx-auto flex flex-col gap-5'>";
        foreach ($posts as $post) {
            $output .= "<article class='p-8 border-2 border-solid rounded-md'>";
            $output .= "<div class='flex justify-between items-center flex-col md:flex-row mb-4'>";
            $output .= "<h2 class='text-4xl'>" . $post->getTitle() . "</h2>";
            $output .= "</div>";
            $output .= "<p class='text-2xl mb-2'>" . substr($post->getDateTime(), 0, 10) . " - By " . $post->getUsername() . "</p>";
            $output .= "<p>" . substr($post->getContent(), 0, 100) . "...</p>";
            $output .= "</article>";

        }
        $output .= "</section>";
        return $output;
    }
}