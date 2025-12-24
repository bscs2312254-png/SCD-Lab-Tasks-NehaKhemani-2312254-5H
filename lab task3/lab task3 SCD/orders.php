<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Orders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <h2 class="text-center mb-4">All Orders</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-center align-middle">
          <thead class="table-primary">
            <tr>
              <th>Order ID</th>
              <th>Customer Name</th>
              <th>Order Date</th>
              <th>Total Quantity</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "
            SELECT o.order_id, c.name AS customer_name, o.order_date, SUM(oi.quantity) AS total_qty
            FROM orders o
            JOIN customers c ON o.customer_id = c.customer_id
            JOIN order_items oi ON o.order_id = oi.order_id
            GROUP BY o.order_id
            ";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['order_id']}</td>
                        <td>{$row['customer_name']}</td>
                        <td>{$row['order_date']}</td>
                        <td>{$row['total_qty']}</td>
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
