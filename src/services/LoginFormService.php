<?php

declare(strict_types=1);
class LoginFormService
{
    static public function displayForm() : string
    {
        $output = "<form method='post' class='container lg:w-1/4 mx-auto flex flex-col p-8 bg-slate-200'>";
        $output .= "<h2 class='text-3xl mb-4 text-center'>Login</h2>";
        $output .= "<div class='mb-5'>";
        $output .= "<label class='mb-3 block' for='username'>Username</label>";
        $output .= '<input class="w-full px-3 py-2 text-lg" type="text" id="username" name="username" />';
        $output .= '</div>';
        $output .= "<div class='mb-5'>";
        $output .= "<label class='mb-3 block' for='password'>Password</label>";
        $output .= "<input class='w-full px-3 py-2 text-lg' type='password' id='password' name='password' />";
        $output .= "</div>";
        $output .= "<input class='px-3 py-2 mt-4 text-lg bg-indigo-400 hover:bg-indigo-700 hover:text-white transition inline-block rounded-sm' type='submit' value='Login' name='login' />";
        $output .= "</form>";
        return $output;
    }
}

