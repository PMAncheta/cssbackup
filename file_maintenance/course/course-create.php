<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add 
                            <a href="course.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    

                    <div class="card-body">
                        <form action="course.php" method="post">

                            <div class="mb-3">
                                <label>CCODE</label>
                                <input type="text" name="ccode" id="ccode" class="form-control">
                            </div>
                           
                            <div class="mb-3">
                                <label>CEQUI</label>
                                <input type="text" name="cequi" id="cequi" class="form-control">
                            </div>

                            
                            <div class="mb-3">
                                <label>CNAME</label>
                                <input type="text" name="cname" id="cname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CDESC</label>
                                <input type="text" name="cdesc" id="cdesc" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CUNITS</label>
                                <input type="number" name="cunits" id="cunits" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CTYPE</label>
                                <input type="text" name="ctype" id="ctype" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CADD</label>
                                <input type="text" name="cadd" id="cadd" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CADD2</label>
                                <input type="text" name="cadd2" id="cadd2" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CTYPEOLD</label>
                                <input type="text" name="ctypeold" id="ctypeold" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary" value="submit">Save Student</button>
                            </div>

                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
