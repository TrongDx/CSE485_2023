<?php
require_once('../../app/config/config.php');
require_once(ROOT_APP.'/models/Article.php');
require_once(ROOT_APP.'/services/ArticleServices.php');
class DeleteArticleController{
    public function index($id){
        
        // include(ROOT_APP.'/views/article/add_article.php');
        $articles = ArticleServices::deleteArticle($id);
        // echo "xoa thanh cong";
        include(ROOT_APP.'/views/home/index.php');
    }
}