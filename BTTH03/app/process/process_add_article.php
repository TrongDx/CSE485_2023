<?php
require_once('../config/config.php');
require_once(ROOT_APP.'/models/Article.php');
require_once(ROOT_APP.'/libs/DBConnection.php');
    $database = new DBConnection();
            if (isset($_POST['btnAdd'])){
                $title = trim($_POST['Title']);
                $summary = trim($_POST['Summary']);
                $content = trim($_POST['Content']);
                $category_id = trim($_POST['Category_id']);
                $member_id = trim($_POST['Member_id']);
                $published = trim($_POST['Published']);
                
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
?>