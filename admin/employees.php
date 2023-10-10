<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .add-employee {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .add-employee h2 {
            margin-top: 0;
        }

        .add-employee label {
            display: block;
            margin-bottom: 5px;
        }

        .add-employee input[type="text"],
        .add-employee input[type="email"],
        .add-employee input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .add-employee input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .add-employee input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        .employee-list {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .employee-list h2 {
            margin-top: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #f2f2f2;
        }

        table td img {
            max-width: 100px;
            max-height: 100px;
        }

        @media only screen and (max-width: 768px) {
            .container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php' ?>

    <div class="employee-list">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Employee List</h2>
            <a href="add_emp.php" class="btn btn-primary">Add Employee</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Division</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include database connection file
                include_once("config.php");

                // Get all employees from database
                $sql = "SELECT * FROM employees";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['division'] . "</td>";
                        echo "<td><img src='uploads/" . $row['image'] . "' height='100'></td>";
                        echo "<td>";
                        echo "<a href='edit_employee.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a> ";
                        echo "<a href='delete_employee.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No employees found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>



</html>
