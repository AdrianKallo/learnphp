<?php
namespace App\Controllers;

class PublicController{
    public function index(){
        $name = 'Adrian';
        include 'views/index.php';
    }
    public function about(){
        include 'views/about.php';
    }
    public function form(){
        include 'views/form.php';
    }

};
