<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Add Employee</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php include'header.php' ?>
<div class="container">
  <div class="row">
    <div class="col-sm-8 mx-auto my-5">
      <h2 class="text-center mb-4">Add Employee</h2>
      <form method="post" action="add_employee.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" name="title" required>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="tel" class="form-control" name="phone" >
        </div>

        <div class="form-group">
  <label for="division">Division:</label>
  <select class="form-control" name="division" required>
    <option value="">Select Division</option>
    <option value="Office of the PARPO">Office of the PARPO</option>
    <option value="Program Beneficiaries Development Division">Program Beneficiaries Development Division</option>
    <option value="Land Tenure Services Division">Land Tenure Services Division</option>
    <option value="Support to Operations Division">Support to Operations Division</option>
    <option value="Legal Division">Legal Division</option>
    <option value="DAR Municipal Office">DAR Municipal Office</option>
  </select>
</div>


        <div class="form-group">
          <label for="image">Image:</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" required>
            <label class="custom-file-label" for="image">Choose file...</label>
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

    </div>
  </div>
</div>

</body>
</html>
