<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
}

include 'db.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
$sort = isset($_GET['sort']) ? $_GET['sort'] : '';

$sql = "SELECT * FROM students WHERE 1=1";

if($search != ''){
    $sql .= " AND (name LIKE '%$search%' OR roll_no LIKE '%$search%')";
}

if($sort == 'name'){
    $sql .= " ORDER BY name ASC";
} elseif($sort == 'marks'){
    $sql .= " ORDER BY marks DESC";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Student Management</span>
            <div>
                <span class="text-light me-3">Welcome, <?php echo $_SESSION['user_name']; ?></span>
                <a href="logout.php" class="btn btn-sm btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="d-flex justify-content-between mb-3">
            <h2>Students List</h2>
            <a href="add_student.php" class="btn btn-success">Add Student</a>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <form method="GET" class="row g-3">
                    <div class="col-md-5">
                        <input type="text" name="search" class="form-control" placeholder="Search by name or roll number" value="<?php echo $search; ?>">
                    </div>
                    <div class="col-md-3">
                        <select name="sort" class="form-select">
                            <option value="">Sort by</option>
                            <option value="name" <?php if($sort == 'name') echo 'selected'; ?>>Name</option>
                            <option value="marks" <?php if($sort == 'marks') echo 'selected'; ?>>Marks</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100">Filter</button>
                    </div>
                    <div class="col-md-2">
                        <a href="dashboard.php" class="btn btn-secondary w-100">Reset</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Roll No</th>
                        <th>Email</th>
                        <th>Marks</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['roll_no']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['marks']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td>
                            <a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete_student.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
