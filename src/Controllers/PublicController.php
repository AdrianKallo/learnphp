<?php

namespace App\Controllers;

use App\DB;

use PDO;
use PDOException;

class PublicController
{
    public function index(){
        $db = new DB();
        $posts = $db-> all('users');
        var_dump($posts);

        $name = 'Adrian';
        include 'views/index.php';
    }

    public function about()
    {
        include 'views/about.php';
    }

    public function form()
    {
        var_dump($_GET);
        var_dump($_POST);
        //var_dump($_SERVER);
        include 'views/form.php';
    }
    public function formPost()
    {
        var_dump($_GET);
        var_dump($_POST);
    }
}
