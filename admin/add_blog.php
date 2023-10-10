<?php include"header.php"?>
<style>
.form {
  max-width: 600px;
  margin: auto;
  padding: 20px;
  background-color: #f8f9fa;
  border: 1px solid #ced4da;
  border-radius: 5px;
}

.form-label {
  font-weight: bold;
}

.form-control {
  width: 100%;
  height: 100px;
  border-radius: 5px;
  border: 1px solid #ced4da;
  padding: 10px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

.form-control-file {
  margin-top: 5px;
}

.btn {
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}

</style>
<form method="POST" action="handle_new_post.php" enctype="multipart/form-data" class="form">
  <div class="form-group">
    <label for="title" class="form-label">Title:</label>
    <input type="text" id="title" name="title" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="content" class="form-label">Content:</label>
    <textarea id="content" name="content" class="form-control" required></textarea>
  </div>

  <div class="form-group">
    <label for="image" class="form-label">Image:</label>
    <input type="file" id="image" name="image" class="form-control-file" accept="image/*">
  </div>

  <button type="submit" class="btn btn-primary">Create Post</button>
</form>
