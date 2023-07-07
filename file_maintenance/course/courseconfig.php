<?php

require 'dbcon.php';


if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM course WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student delete Successfully";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not deleted ";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    }
}

if(isset($_REQUEST['update_student']))
{
    $course_id = mysqli_real_escape_string($conn, $_REQUEST['course_id']);
    $ccode = mysqli_real_escape_string($conn, $_REQUEST['ccode']);
    $cequi = mysqli_real_escape_string($conn, $_REQUEST['cequi']);
    $cname = mysqli_real_escape_string($conn, $_REQUEST['cname']);
    $cdesc = mysqli_real_escape_string($conn, $_REQUEST['cdesc']);
    $cunits = mysqli_real_escape_string($conn, $_REQUEST['cunits']);
    $ctype = mysqli_real_escape_string($conn, $_REQUEST['ctype']);
    $cadd = mysqli_real_escape_string($conn, $_REQUEST['cadd']);
    $cadd2 = mysqli_real_escape_string($conn, $_REQUEST['cadd2']);
    $ctypeold = mysqli_real_escape_string($conn, $_REQUEST['ctypeold']);


    $query = "UPDATE course SET ccode='$ccode', cequi='$cequi', cname='$cname',
     cdesc='$cdesc', cunits='$cunits', ctype='$ctype', 
      cadd='$cadd', cadd2='$cadd2', ctypeold='$ctypeold' WHERE course_id='$course_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student updated Successfully";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not updated";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    }

}
?>

<?php
if(isset($_POST['save_student']))
{
    $ccode = mysqli_real_escape_string($conn, $_POST['ccode']);
    $cequi = mysqli_real_escape_string($conn, $_POST['cequi']);
    $cname = mysqli_real_escape_string($conn, $_POST['cname']);
    $cdesc = mysqli_real_escape_string($conn, $_POST['cdesc']);
    $cunits = mysqli_real_escape_string($conn, $_POST['cunits']);
    $ctype = mysqli_real_escape_string($conn, $_POST['ctype']);
    $cadd = mysqli_real_escape_string($conn, $_POST['cadd']);
    $cadd2 = mysqli_real_escape_string($conn, $_POST['cadd2']);
    $ctypeold = mysqli_real_escape_string($conn, $_POST['ctypeold']);

    $query = "INSERT INTO course (ccode,cequi,cname,cdesc,cunits,ctype,cadd,cadd2,ctypeold) 
    VALUES ('$ccode','$cequi','$cname','$cdesc','$cunits','$ctype','$cadd','$cadd2','$ctypeold')";
    
    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student Created Successfully";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    }
}
?>