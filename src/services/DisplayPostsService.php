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

//<article >
//
//
//        <div class="flex justify-between items-center flex-col md:flex-row mb-4">
//            <h2 class="text-4xl">Example title</h2>
//            <span class="text-xl">100 likes - 50 dislikes</span>
//        </div>
//        <p class="text-2xl mb-2">01/01/2024 - By Bob</p>
//        <p>Lorem ipsum dolor sit amet, consectetur efficitur, Lorem ipsum dolor sit amet, consectetur efficitur...</p>
//        <div class="flex justify-center">
//            <a class="px-3 py-2 mt-4 text-lg bg-indigo-400 hover:bg-indigo-700 hover:text-white transition inline-block rounded-sm" href="singlePost.php">View post</a>
//        </div>
//    </article>