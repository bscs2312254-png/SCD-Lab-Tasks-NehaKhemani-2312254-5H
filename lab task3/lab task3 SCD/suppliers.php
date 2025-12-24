<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Suppliers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="text-center mb-4">All Suppliers</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center align-middle">
          <thead class="table-warning">
            <tr>
              <th>Supplier Name</th>
              <th>Contact</th>
              <th>Product Supplied</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "
            SELECT s.name AS supplier_name, s.contact, p.name AS product_name
            FROM suppliers s
            JOIN products p ON s.product_id = p.product_id
            ";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['supplier_name']}</td>
                        <td>{$row['contact']}</td>
                        <td>{$row['product_name']}</td>
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
