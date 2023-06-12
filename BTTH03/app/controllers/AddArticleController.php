<?php
// require_once('../../app/config/config.php');
require_once(ROOT_APP.'/models/Article.php');
require_once(ROOT_APP.'/services/ArticleServices.php');
class AddArticleController{
    public function index(){
        
        // include(ROOT_APP.'/views/article/add_article.php');
        $articles = ArticleServices::addArticle();
        include(ROOT_APP.'./app/views/article/add_article.php');
    }
}