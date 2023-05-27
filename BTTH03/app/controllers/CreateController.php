<?php
require_once('../app/services/ArticleServices.php');
class CreateController{
    public function index(){
        // include('../app/views/article/add_article.php');
        $articles = ArticleServices::createArticle();
        echo 'da theem du lieu thanh cong';
        
    }
}