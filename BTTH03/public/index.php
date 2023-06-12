<?php
require_once('../app/config/config.php');
require_once(ROOT_APP.'/libs/DBConnection.php');
// Routing: dieu huong
// Kiem tra URL cua nguoi dung > Tim ra Controller
// URL: tlu.edu.vn/ = tlu.edu.vn/index.php?route=home > HomeController
// URL: tlu.edu.vn/index.php?route=articles > ArticleController
// URL: tlu.edu.vn/article/1/edit

$route = isset($_GET['route'])?$_GET['route']:'home';

if($route == 'home'){
    require_once(ROOT_APP.'/controllers/HomeController.php');
    $homeController = new HomeController();
    $homeController->index();
}else if($route=='articles'){
    require_once(ROOT_APP.'/controllers/ArticleController.php');
    $articleController = new ArticleController();
    $articleController->index();
}else if($route=='add'){
    require_once(ROOT_APP.'/controllers/AddArticleController.php');
    $addController = new AddArticleController();
    $addController->index();
}else if($route=='delete'){
    require_once(ROOT_APP.'/controllers/DeleteArticleController.php');
    $deleteController = new DeleteArticleController();
    $deleteController->index($id);
}
else{
    echo "Other";
}