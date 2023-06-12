<?php

require_once('../../config/config.php');
require_once(ROOT_APP.'/models/Article.php');
require_once(ROOT_APP.'/libs/DBConnection.php');
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
?>