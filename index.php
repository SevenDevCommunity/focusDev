<?php 
include 'includes/db.php';

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $score = $_POST['score'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $year = $_POST['year'];
    $sql = "INSERT INTO students (fname,lname,course,semester,score,email,age,year) VALUES('$fname','$lname','$course','$semester','$score','$email','$age',$year)";

    $result = mysqli_query($connection,$sql);

    if($result) {
        header("location:all_students.php");
    }else {
        die("There was a problem creating student");
    }
}

?>

<html lang="en">
<head>
    <?php include 'includes/header.php' ?>
    <title>Home</title>
</head>
<body>
    <h1 class="text-center">STUDENT DATA</h1>
   <div class="container">
       <div class="row">
           <div class="col-md-6 mx-auto">
               <form action="" method="POST">
                   <div class="form-group">
                       <label for="name">FIRST Name: </label>
                       <input name="fname" type="text" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">LAST Name: </label>
                       <input name="lname" type="text" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">COURSE: </label>
                       <input name="course" type="text" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">SEMESTER: </label>
                       <input name="semester" type="text" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">SEMESTER SCORE: </label>
                       <input name="score" type="number" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">Email: </label>
                       <input name="email" type="email" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">Student Age: </label>
                       <input name="age" type="number" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name"> Year: </label>
                       <input name="year" type="date" class="form-control">
                   </div>
                   <button type="submit" name="submit" class="btn btn-primary mt-3">Create Student</button>
               </form>
           </div>
       </div>
   </div>
</body>
</html>