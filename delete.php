<?php 
    include 'includes/db.php';
    $id = $_GET['studid'];

    $sql = "DELETE FROM students WHERE id=$id";

    $result = mysqli_query($connection,$sql);

    if($result) {
        header("location:all_students.php");
    }else {
        die("There was an error deleting student");
    }
?>

<html lang="en">
<head>
    <?php include 'includes/header.php' ?>
    <title>Delete Student</title>
</head>
<body>
    <h1 class="text-center">DELETE</h1>
</body>
</html>