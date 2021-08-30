<?php include('config/db.php'); ?>
<?php
    $id_can_xoa = $_GET['id'];
    $sql = "DELETE FROM tbpost WHERE id=$id_can_xoa";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        $_SESSION['delete'] = "<div class='success'>Deleted Post Successfully.</div>";
        header('location:'.SITEURL.'/admin/postsManagement.php');
    }
    else{
        $_SESSION['delete-mes'] = "<div class='success'>Deleted Post Failed.</div>";
        header('location:'.SITEURL.'/admin/postsManagement.php');
    }
?>