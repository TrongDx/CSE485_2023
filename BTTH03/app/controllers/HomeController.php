<?php
require_once(ROOT_APP.'/services/ArticleServices.php');
class HomeController{
    public function index(){
        $articles = ArticleServices::getAllArticles();

        include(ROOT_APP.'/views/home/index.php');
    }
}