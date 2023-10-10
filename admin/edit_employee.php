
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'header.php' ?>

    <div class="container">
        <h2>Edit Employee</h2>
        <?php
        // Include database connection file
        include_once("config.php");

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Get employee data from database
            $sql = "SELECT * FROM employees WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {
                // Display data in form
                $row = mysqli_fetch_assoc($result);
                $name = $row['name'];
                $title = $row['title'];
                $email = $row['email'];
                $phone = $row['phone'];
                $division = $row['division'];
        ?>
                <form method="post" action="update_employee.php" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?php echo $id ?>">

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $name ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $title ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email ?>" >
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="tel" class="form-control" name="phone" value="<?php echo $phone ?>" >
                    </div>

                    <div class="form-group">
                        <label for="image">Image:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="image">Choose file...</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="division">Division:</label>
                        <select class="form-control" name="division" required>
                            <option value="">--Select Division--</option>
                            <option value="Office of the PARPO" <?php if ($division == 'Office of the PARPO') echo 'selected' ?>>Office of the PARPO</option>
                            <option value="Program Beneficiaries Development Division" <?php if ($division == 'Program Beneficiaries Development Division') echo 'selected' ?>>Program Beneficiaries Development Division</option>
                            <option value="Land Tenure Services Division" <?php if ($division == 'Land Tenure Services Division') echo 'selected' ?>>Land Tenure Services Division</option>
                            <option value="Legal Division" <?php if ($division == 'Legal Division') echo 'selected' ?>>Legal Division</option>
                            <option value="Support to Operations Division" <?php if ($division == 'Support to Operations Division') echo 'selected' ?>>Support to Operations Division</option>
                            <option value="DAR Municipal Office" <?php if ($division == 'DAR Municipal Office') echo 'selected' ?>>DAR Municipal Office</option>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>

                  </form>
<?php
} else {
// If no employee data found with given ID, display error message
echo "<p>No employee found with ID: $id</p>";
}
} else {
// If no ID passed in URL, display error message
echo "<p>No employee ID passed in URL</p>";
}

// Close database connection
mysqli_close($conn);
?>
</div>
