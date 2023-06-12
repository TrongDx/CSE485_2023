<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center text-success my-3">Homepage for Demo</h1>
    <a href="<?= DOMAIN.'app/views/article/add_article.php' ?>" class="btn btn-success">ADD</a>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">summary</th>
            <th scope="col">content</th>
            <th scope="col">created</th>
            <th scope="col">category_id</th>
            <th scope="col">member_id</th>
            <th scope="col">image_id</th>
            <th scope="col">published</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($articles as $article){
                    // echo "<p>{$article->getTitle()}</p>";
                
            ?>
        
            <tr>
            <th scope="row"><?= $article->getId();?></th>
            <td><?= $article->getTitle();?></td>
            <td><?= $article->getSummary();?></td>
            <td><?= $article->getContent();?></td>
            <td><?= $article->getCreated();?></td>
            <td><?= $article->getCategory_id();?></td>
            <td><?= $article->getMember_id();?></td>
            <td><?= $article->getImage_id();?></td>
            <td><?= $article->getPublished();?></td>
            <td><a href="<?= DOMAIN.'app/views/article/edit.php?id='.$article->getId(); ?>"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href="<?= DOMAIN.'app/views/article/delete.php?id='.$article->getId(); ?>"><i class="bi bi-trash"></i></a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>