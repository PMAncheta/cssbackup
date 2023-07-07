<?php

require 'dbcon.php';


if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM faculty WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student delete Successfully";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not deleted ";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    }
}

if(isset($_REQUEST['update_student']))
{
    $serialnr = mysqli_real_escape_string($conn, $_REQUEST['serialnr']);
    $lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
    $fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
    $mi = mysqli_real_escape_string($conn, $_REQUEST['mi']);
    $aname = mysqli_real_escape_string($conn, $_REQUEST['aname']);
    $gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
    $deptcode = mysqli_real_escape_string($conn, $_REQUEST['deptcode']);
    $igroup = mysqli_real_escape_string($conn, $_REQUEST['igroup']);
    $itype = mysqli_real_escape_string($conn, $_REQUEST['itype']);
    $ranks = mysqli_real_escape_string($conn, $_REQUEST['ranks']);
    $brofserv = mysqli_real_escape_string($conn, $_REQUEST['brofserv']);
    $status = mysqli_real_escape_string($conn, $_REQUEST['status']);
    $pix = mysqli_real_escape_string($conn, $_REQUEST['pix']);
    $uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);
    $pwd = mysqli_real_escape_string($conn, $_REQUEST['pwd']);
    $lvl = mysqli_real_escape_string($conn, $_REQUEST['lvl']);
    $active = mysqli_real_escape_string($conn, $_REQUEST['active']);


    $query = "UPDATE faculty SET serialnr='$serialnr', lname='$lname', fname='$fname', mi='$mi', aname='$aname', 
    gender='$gender', deptcode='$deptcode', igroup='$igroup', itype='$itype', ranks='$ranks', brofserv='$brofserv',
    status='$status', pix='$pix', uname='$uname', pwd='$pwd', lvl='$lvl', active='$active'
    WHERE faculty_id='$faculty_id'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student updated Successfully";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not updated";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    }

}
?>

<?php
if(isset($_POST['save_student']))
{
    $serialnr = mysqli_real_escape_string($conn, $_POST['serialnr']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $mi = mysqli_real_escape_string($conn, $_POST['mi']);
    $aname = mysqli_real_escape_string($conn, $_POST['aname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $deptcode = mysqli_real_escape_string($conn, $_POST['deptcode']);
    $igroup = mysqli_real_escape_string($conn, $_POST['igroup']);
    $itype = mysqli_real_escape_string($conn, $_POST['itype']);
    $ranks = mysqli_real_escape_string($conn, $_POST['ranks']);
    $brofserv = mysqli_real_escape_string($conn, $_POST['brofserv']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $pix = mysqli_real_escape_string($conn, $_POST['pix']);
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $lvl = mysqli_real_escape_string($conn, $_POST['lvl']);
    $active = mysqli_real_escape_string($conn, $_POST['active']);

    $query = "INSERT INTO faculty (serialnr,lname,fname,mi,aname,gender,deptcode,igroup,itype,ranks,brofserv,
    status,pix,uname,pwd,lvl,active) 
    VALUES ('$serialnr','$lname','$fname','$mi','$aname','$gender','$deptcode','$igroup','$itype','$ranks',
    '$brofserv','$status','$pix','$uname','$pwd','$lvl','$active')";
    
    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student Created Successfully";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    }
}


if (isset($_POST['submit']) && isset($_FILES['my_image'])) {


	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
      echo "<script>window.location.href = 'faculty-create.php'?error=$em;</script>";
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'image/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO faculty (pix) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				echo "<script>window.location.href = 'faculty-view.php'?error=$em;</script>";
			}else {
				$em = "You can't upload files of this type";
		        echo "<script>window.location.href = 'faculty-create.php'?error=$em;</script>";
			}
		}
	}else {
		$em = "unknown error occurred!";
		echo "<script>window.location.href = 'faculty.php'?error=$em;</script>";
	}

}else {
	
}


  
?>