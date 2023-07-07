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
                            <a href="faculty.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    

                    <div class="card-body">
                        <form action="faculty.php"
                        name="myForm"
                        method="post"
                        enctype="multipart/form-data"
                        onsubmit="return validateForm()">

                            <div class="mb-3">
                                <label>SERIALNR</label>
                                <input type="text" name="serialnr" id="serialnr" placeholder="c#" class="form-control" required>
                            </div>
                           
                            <div class="mb-3">
                                <label>LNAME</label>
                                <input type="text" name="lname" id="lname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>FNAME</label>
                                <input type="text" name="fname" id="fname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>MI</label>
                                <input type="text" name="mi" id="mi" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>ANAME</label>
                                <input type="text" name="aname" id="aname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>GENDER</label>
                                <input type="text" name="gender" id="gender" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>DEPTCODE</label>
                                <input type="text" name="deptcode" id="deptcode" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>IGROUP</label>
                                <input type="text" name="igroup" id="igroup" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>ITYPE</label>
                                <input type="text" name="itype" id="itype" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>RANKS</label>
                                <input type="text" name="ranks" id="ranks" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>BROFSERV</label>
                                <input type="text" name="brofserv" id="brofserv" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>STATUS</label>
                                <input type="text" name="status" id="status" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                 <label>PIX</label>
                                <input type="file" name="my_image" accept="image/*" required>
                            </div>
                            <div class="mb-3">
                                <label>UNAME</label>
                                <input type="text" name="uname" id="uname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>PWD</label>
                                <input type="text" name="pwd" id="pwd" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>LVL</label>
                                <input type="number" name="lvl" id="lvl" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>ACTIVE</label>
                                <input type="number" name="active" id="active" class="form-control" required>
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

    <script src="errormsg.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
