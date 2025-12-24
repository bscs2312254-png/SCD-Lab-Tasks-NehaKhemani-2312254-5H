<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online Shopping System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="text-center mb-4">Welcome to Online Shopping Management System</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <h4 class="text-center mb-3">Customers</h4>
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center align-middle">
          <thead class="table-primary">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM customers");
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['customer_id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                      </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="text-center mt-4">
    <a href="orders.php" class="btn btn-primary mx-2">View Orders</a>
    <a href="products.php" class="btn btn-success mx-2">View Products</a>
    <a href="suppliers.php" class="btn btn-warning mx-2">View Suppliers</a>
  </div>
</div>

</body>
</html>
