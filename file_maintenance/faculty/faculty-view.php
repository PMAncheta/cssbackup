<?php
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

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details 
                            <a href="faculty.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['faculty_id']))
                        {
                            $faculty_id = mysqli_real_escape_string($conn, $_GET['faculty_id']);
                            $query = "SELECT * FROM faculty WHERE faculty_id='$faculty_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>SERIALNR</label>
                                        <p class="form-control">
                                            <?=$student['serialnr'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>LNAME</label>
                                        <p class="form-control">
                                            <?=$student['lname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>FNAME</label>
                                        <p class="form-control">
                                            <?=$student['fname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>MI</label>
                                        <p class="form-control">
                                            <?=$student['mi'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>ANAME</label>
                                        <p class="form-control">
                                            <?=$student['aname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>GENDER</label>
                                        <p class="form-control">
                                            <?=$student['gender'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>DEPTCODE</label>
                                        <p class="form-control">
                                            <?=$student['deptcode'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>IGROUP</label>
                                        <p class="form-control">
                                            <?=$student['igroup'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>ITYPE</label>
                                        <p class="form-control">
                                            <?=$student['itype'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>RANKS</label>
                                        <p class="form-control">
                                            <?=$student['ranks'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>BROFSERV</label>
                                        <p class="form-control">
                                            <?=$student['brofserv'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>STATUS</label>
                                        <p class="form-control">
                                            <?=$student['status'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>PIX</label>
                                        <p class="form-control">
                                            <?=$student['pix'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>UNAME</label>
                                        <p class="form-control">
                                            <?=$student['uname'];?>
                                        </p>
                                    </div><div class="mb-3">
                                        <label>PWD</label>
                                        <p class="form-control">
                                            <?=$student['pwd'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>LVL</label>
                                        <p class="form-control">
                                            <?=$student['lvl'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>ACTIVE</label>
                                        <p class="form-control">
                                            <?=$student['active'];?>
                                        </p>
                                    </div>


                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>