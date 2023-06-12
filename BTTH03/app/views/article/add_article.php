<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5 mb-5" >ADD NEW ARTICLE</h5>
            <form novalidate action="../../process/process_add_article.php" method="POST">
                <div class="mb-3">
                    <label for="Title" class="form-label">tile</label>
                    <input type="text" class="form-control" id="Title" name="Title" placeholder="Title">
                </div>
                <div class="mb-3">
                    <label for="Summary" class="form-label">Summary</label>
                    <input type="text" class="form-control" id="Summary" name="Summary" placeholder="Summary">
                </div>
                <div class="mb-3">
                    <label for="Content" class="form-label">Content</label>
                    <input type="tel" class="form-control" id="Content" name="Content" placeholder="Content">
                </div>
                <div class="mb-3">
                    <label for="dateCreated" class="form-label">Created</label>
                    <input type="date" class="form-control" id="dateCreated" name="dateCreated" placeholder="Số di động">
                </div>
                <div class="mb-3">
                    <label for="Category_id" class="form-label">Category_id</label>
                    <input type="number" class="form-control" id="Category_id" name="Category_id" placeholder="Category_id">
                </div>
                <div class="mb-3">
                    <label for="Member_id" class="form-label">Member_id</label>
                    <input type="number" class="form-control" id="Member_id" name="Member_id" placeholder="Member_id">
                </div>
                <div class="mb-3">
                    <label for="Image_id" class="form-label">Image_id</label>
                    <input type="number" class="form-control" id="Image_id" name="Image_id" placeholder="Image_id">
                </div>
                <div class="mb-3">
                    <label for="Published" class="form-label">Published</label>
                    <input type="number" class="form-control" id="Published" name="Published" placeholder="Published">
                </div>

                <button type="submit" name="btnAdd" class="btn btn-primary">Submit</button>
            </form>
    </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>