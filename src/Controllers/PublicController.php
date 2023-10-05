<?php
namespace App\Controllers;

class PublicController {
    public function index(){
        $name = 'Kaspar';
        include 'views/index.php';
    }

    public function about(){
        include 'views/about.php';
    }

    public function form(){
        var_dump($_GET);
        include 'views/form.php';
    }
}