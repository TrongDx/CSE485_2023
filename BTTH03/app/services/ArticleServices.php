<?php
require_once('app/libs/DBConnection.php');
require_once('app/models/Article.php');

// require_once('../app/views/article/add_article.php');
class ArticleServices{
    public static function getAllArticles(){
        //b1: ket noi DB Server
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        //$conn = DBConnection::getConnection();
        //b2: thuc hien truy van
        $sql = "SELECT * FROM article";
        $stmt = $conn->query($sql);

        //b3 : xu ly ket qua
        $articles = [];
        while($row = $stmt->fetch()){
            $article = new Article($row['id'],$row['title'],$row['summary'],$row['content'],$row['created'],$row['category_id'],$row['member_id'],$row['image_id'],$row['published']);
            $articles[] = $article;
        }
        return $articles;
    }

    public static function createArticle(){
        //b1: ket noi DB Server
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        // if(isset($_POST['id'])){
        // $id = $_POST['id'];
        // }
        // if(isset($_POST['title'])){
        //     $title = $_POST['title'];
        // }
        // if(isset($_POST['summary'])){
        //     $summary = $_POST['summary'];
        // }
        
        // if(isset($_POST['content'])){
        //     $content = $_POST['content'];
        // }
        
        // if(isset($_POST['created'])){
        //     $created = $_POST['created'];
        // }
        
        // if(isset($_POST['category_id'])){
        //     $category_id = $_POST['category_id'];
        // }
        
        // if(isset($_POST['member_id'])){
        //     $member_id = $_POST['member_id'];
        // }
        
        // if(isset($_POST['image_id'])){
        //     $image_id = $_POST['image_id'];
        // }
        
        // if(isset($_POST['published'])){
        //     $published = $_POST['published'];
        // }
        

        //$conn = DBConnection::getConnection();
        //b2: thuc hien truy van
        $sql = 'INSERT INTO article (id, title, summary, content, created, category_id, member_id, image_id, published) VALUES ("26", "ABCDE", "HueSunnn", "DinhThiHue", NOW(), "1", "2", "1", "2")';
        $stmt = $conn->query($sql);
    }
}