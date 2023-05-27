
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="../app/controllers/CreateController.php">
  <div>
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required>
  </div>
  <div>
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
  </div>
  <div>
    <label for="summary">Summary:</label>
    <textarea id="summary" name="summary" required></textarea>
  </div>
  <div>
    <label for="content">Content:</label>
    <textarea id="content" name="content" required></textarea>
  </div>
  <div>
    <label for="created">Created:</label>
    <input type="date" id="created" name="created" required>
  </div>
  <div>
    <label for="category_id">Category ID:</label>
    <input type="text" id="category_id" name="category_id" required>
  </div>
  <div>
    <label for="member_id">Member ID:</label>
    <input type="text" id="member_id" name="member_id" required>
  </div>
  <div>
    <label for="image_id">Image ID:</label>
    <input type="text" id="image_id" name="image_id" required>
  </div>
  <div>
    <label for="published">Published:</label>
    <input type="text" id="published" name="published">
  </div>
  <button type="submit">Submit</button>
</form>
</body>
</html>