<?php
// require_once('../../app/config/config.php');
require_once(ROOT_APP.'/models/Article.php');

// require_once(ROOT_APP.'/process/process_add_article.php');

// require_once('../app/views/article/add_article.php');
class ArticleServices{
    public static function getAllArticles(){
        //b1: ket noi DB Server
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        //$conn = DBConnection::getConnection();
        //b2: thuc hien truy van
        if($conn != null){
            $sql = "SELECT * FROM article ORDER BY id DESC";
            $stmt = $conn->query($sql);
    
            //b3 : xu ly ket qua
            $articles = [];
            while($row = $stmt->fetch()){
                $article = new Article($row['id'],$row['title'],$row['summary'],$row['content'],$row['created'],$row['category_id'],$row['member_id'],$row['image_id'],$row['published']);
                $articles[] = $article;
            }
            return $articles;
        }
        
    }

    public static function addArticle(){
        try {
            $database = new DBConnection();
            if (isset($_POST['btnAdd'])){
                $title = trim($_POST['title']);
                $summary = trim($_POST['summary']);
                $content = trim($_POST['content']);
                $category_id = trim($_POST['category_id']);
                $member_id = trim($_POST['member_id']);
                $published = trim($_POST['published']);
                
                    $conn = $database->getConnection();
                    $sql = "INSERT INTO article (title, summary, content, category_id, member_id, published)
                        VALUES (:title, :summary, :content, :category_id, :member_id, :published)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':title', $title);
                    $stmt->bindParam(':summary', $summary);
                    $stmt->bindParam(':content', $content);
                    $stmt->bindParam(':category_id', $category_id);
                    $stmt->bindParam(':member_id', $member_id);
                    $stmt->bindParam(':published', $published);

                    if ($stmt->execute()) {
                        echo "Them thanh cong";
                    } else {
                        echo "Them that bai";                   
                    }

            }
        }catch (ErrorException $e){
            echo  $e;
        }
    }

    public static function deleteArticle($id) {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        $id = $_GET['id'];
        if($conn != null){
            $sql = "DELETE FROM article WHERE id = :id";
            try {
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                echo "Xóa bài viết thành công";
            } catch (PDOException $e) {
                echo "Lỗi xóa bài viết: " . $e->getMessage();
            }
        }
    }
}