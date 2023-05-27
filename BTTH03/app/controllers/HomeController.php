<?php
require_once('../app/services/ArticleServices.php');
class HomeController{
    public function index(){
        $articles = ArticleServices::getAllArticles();

        include('../app/views/home/index.php');
    }
}