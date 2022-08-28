<?php 
    include "includes/db.php";

    $id = $_GET['studid'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $course = $_GET['course'];
    $semester = $_GET['semester'];
    $score = $_GET['score'];
    $email = $_GET['email'];
    $year = $_GET['year'];

    if(isset($_POST['submit'])) {
        $updatedfname = $_POST['fname'];
        $updatedlname = $_POST['lname'];
        $updatedcourse = $_POST['course'];
        $updatedsemester = $_POST['semester'];
        $updatedscore = $_POST['score'];
        $updatedemail = $_POST['email'];
        $updatedyear = $_POST['year'];

        $sql = "UPDATE students SET fname='$updatedfname', lname='$updatedlname', course='$updatedcourse', semester='$updatedsemester' ,score='$updatedscore', email='$updatedemail', year='$updatedyear' WHERE id=$id";

        $result = mysqli_query($connection,$sql);

        if($result) {
            header("location:all_students.php");
        }else {
            die("There was an error with our code");
        }
    }

?>

<html lang="en">
<head>
    <?php include 'includes/header.php' ?>
    <title>Update Student</title>
</head>
<body>
    <h1 class="text-center">UPDATE</h1>
    <div class="container">
       <div class="row">
           <div class="col-md-6 mx-auto">
               <form action="" method="POST">
                   <div class="form-group">
                       <label for="name">First Name: </label>
                       <input value="<?php echo $name; ?>" name="fname" type="text" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">Last Name: </label>
                       <input value="<?php echo $lname; ?>" name="lname" type="text" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">Course: </label>
                       <input value="<?php echo $course; ?>" name="course" type="text" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">Semester: </label>
                       <input value="<?php echo $semester; ?>" name="semester" type="text" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">Score: </label>
                       <input value="<?php echo $score; ?>" name="score" type="number" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">Email: </label>
                       <input name="email" value="<?php echo $email ?>" type="email" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="name">Year: </label>
                       <input name="year" value="<?php echo $year ?>" type="date" class="form-control">
                   </div>
                   <button type="submit" name="submit" class="btn btn-primary mt-3">Update Student</button>
               </form>
           </div>
       </div>
   </div>
</body>
</html>