<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
}

include 'db.php';

$error = '';
$success = '';
$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn, $sql);
$student = mysqli_fetch_assoc($result);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $email = $_POST['email'];
    $marks = $_POST['marks'];
    $department = $_POST['department'];
    
    $sql = "UPDATE students SET name='$name', roll_no='$roll_no', email='$email', marks='$marks', department='$department' WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        $success = 'Student updated successfully';
        $student = array('name'=>$name, 'roll_no'=>$roll_no, 'email'=>$email, 'marks'=>$marks, 'department'=>$department);
    } else {
        $error = 'Failed to update student';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Student Management</span>
            <a href="dashboard.php" class="btn btn-sm btn-outline-light">Back to Dashboard</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Student</h3>
                    </div>
                    <div class="card-body">
                        <?php if($error): ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        <?php if($success): ?>
                            <div class="alert alert-success"><?php echo $success; ?></div>
                        <?php endif; ?>

                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $student['name']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Roll Number</label>
                                <input type="text" name="roll_no" class="form-control" value="<?php echo $student['roll_no']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $student['email']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Marks</label>
                                <input type="number" name="marks" class="form-control" value="<?php echo $student['marks']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department</label>
                                <input type="text" name="department" class="form-control" value="<?php echo $student['department']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Student</button>
                            <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
