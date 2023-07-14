<?php

require 'dbcon.php';


if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM department WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student delete Successfully";
        echo "<script>window.location.href = 'department.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not deleted ";
        echo "<script>window.location.href = 'department.php';</script>";
        exit(0);
    }
}

if(isset($_REQUEST['update_student']))
{
    $department_id = mysqli_real_escape_string($conn, $_REQUEST['department_id']);
    $deptcode = mysqli_real_escape_string($conn, $_REQUEST['deptcode']);
    $deptname = mysqli_real_escape_string($conn, $_REQUEST['deptname']);
    $depthead = mysqli_real_escape_string($conn, $_REQUEST['depthead']);
    $deptgroup = mysqli_real_escape_string($conn, $_REQUEST['deptgroup']);


    $query = "UPDATE department SET deptcode='$deptcode', deptname='$deptname', deptgroup='$deptgroup' 
    WHERE department_id='$department_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student updated Successfully";
        echo "<script>window.location.href = 'department.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not updated";
        echo "<script>window.location.href = 'department.php';</script>";
        exit(0);
    }

}
?>

<?php
if(isset($_POST['save_student']))
{
    $deptcode = mysqli_real_escape_string($conn, $_POST['deptcode']);
    $deptname = mysqli_real_escape_string($conn, $_POST['deptname']);
    $depthead = mysqli_real_escape_string($conn, $_POST['depthead']);
    $deptgroup = mysqli_real_escape_string($conn, $_POST['deptgroup']);

    $query = "INSERT INTO department (deptcode,deptname,depthead,deptgroup) 
    VALUES ('$deptcode','$deptname','$depthead','$deptgroup')";
    
    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student Created Successfully";
        echo "<script>window.location.href = 'department.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created";
        echo "<script>window.location.href = 'department.php';</script>";
        exit(0);
    }
}
?>