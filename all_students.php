<?php 
 include 'includes/db.php';

 $sql = "SELECT * FROM students";

 $studDataQuery = mysqli_query($connection,$sql);
 if(!$studDataQuery) {
     die("Error trying to get student data");
    //  echo $studDataQuery;
    // print_r($studData);
 }

?>

<html lang="en">
<head>
    <?php include 'includes/header.php' ?>
    <title>All Students</title>
</head>
<body>
    <h1 class="text-center">ALL</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td class="col">
                                ID
                            </td>
                            <td class="col">
                                Fname
                            </td>
                            <td class="col">
                                Lname
                            </td>
                            <td class="col">
                                Course
                            </td>
                            <td class="col">
                               Semester
                            </td>
                            <td class="col">
                               Score
                            </td>
                            <td class="col">
                              Email
                            </td>
                            <td class="col">
                              Age
                            </td>
                            <td class="col">
                              Year
                            </td>
                            <td class="col">
                                ACTION
                            </td>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                        while($data = mysqli_fetch_assoc($studDataQuery)) {
                            echo "<tr>
                            <td class='col'>
                                ".$data['id']."
                            </td>
                            <td class='col'>
                                ".$data['fname']."
                            </td>
                            <td class='col'>
                                ".$data['lname']."
                            </td>
                            <td class='col'>
                                ".$data['course']."
                            </td>
                            <td class='col'>
                                ".$data['semester']."
                            </td>
                            <td class='col'>
                                ".$data['score']."
                            </td>
                            <td class='col'>
                                ".$data['email']."
                            </td>
                            <td class='col'>
                                ".$data['age']."
                            </td>
                            <td class='col'>
                                ".$data['year']."
                            </td>
                            <td class='col'>
                                <button class='btn btn-success'>
                                <a class='text-light text-decoration-none' href='update.php?studid=".$data['id']."&fname=".$data['fname']."&lname=".$data['lname']."&course=".$data['course']."&semester=".$data['semester']."&score=".$data['score']."&email=".$data['email']."&year=".$data['year']."'>UPDATE</a>
                                </button>
                            </td>
                        </tr>";

                        }

                    ?>

                        <!-- <tr>
                            <td class="col">
                                1
                            </td>
                            <td class="col">
                                Testing
                            </td>
                            <td class="col">
                                Testing@gmail.com
                            </td>
                            <td class="col">
                                77
                            </td>
                            <td class="col">
                                <button class="btn btn-success">UPDATE</button>
                                <button class="btn btn-danger">DELETE</button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>