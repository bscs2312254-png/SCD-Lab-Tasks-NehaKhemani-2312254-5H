<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="text-center mb-4">All Products</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center align-middle">
          <thead class="table-success">
            <tr>
              <th>Product ID</th>
              <th>Product Name</th>
              <th>Category</th>
              <th>Price (PKR)</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "
            SELECT p.product_id, p.name, c.category_name, p.price
            FROM products p
            JOIN categories c ON p.category_id = c.category_id
            ";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['product_id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['category_name']}</td>
                        <td>{$row['price']}</td>
                      </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="text-center mt-4">
    <a href="index.php" class="btn btn-secondary">Back to Home</a>
  </div>
</div>

</body>
</html>
