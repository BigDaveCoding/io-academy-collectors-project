<?php
declare(strict_types=1);

class NavBarService
{
    static public function display(bool $loggedIn) : string
    {
        $output = '<nav class="flex justify-between items-center py-5 px-4 mb-10 border-b border-solid">';
        $output .= '<a href="index.php"><h1 class="text-5xl">Blog</h1></a>';
        $output .= "<div class='flex gap-5'>";
        $output .= "<a href='#'>Create Post</a>";
        if ($loggedIn) {
            $output .= "<a href='logout.php'>Logout</a>";
        } else {
            $output .= "<a href='login.php'>Login</a>";
        }
        $output .= "</div>";
        $output .= "</nav>";
        return $output;
    }
}

