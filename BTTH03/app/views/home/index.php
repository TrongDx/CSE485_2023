<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Homepage for Demo</h1>
        
   


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
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($articles as $article){
                    // echo "<p>{$article->getTitle()}</p>";
                
            ?>
        
            <tr>
            <th scope="row"><?php echo "<p>{$article->getId()}</p>";?></th>
            <td><?php echo "<p>{$article->getTitle()}</p>";?></td>
            <td><?php echo "<p>{$article->getSummary()}</p>";?></td>
            <td><?php echo "<p>{$article->getContent()}</p>";?></td>
            <td><?php echo "<p>{$article->getCreated()}</p>";?></td>
            <td><?php echo "<p>{$article->getCategory_id()}</p>";?></td>
            <td><?php echo "<p>{$article->getMember_id()}</p>";?></td>
            <td><?php echo "<p>{$article->getImage_id()}</p>";?></td>
            <td><?php echo "<p>{$article->getPublished()}</p>";?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>