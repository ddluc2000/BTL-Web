<?php include('config/db.php'); ?>
<?php
    $id_can_xoa = $_GET['id'];
    $sql = "DELETE FROM tbtopic WHERE id=$id_can_xoa";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        $_SESSION['delete'] = "<div class='success'>Deleted Topic Successfully.</div>";
        header('location:'.SITEURL.'/admin/topicsManagement.php');
    }
    else{
        $_SESSION['delete-mes'] = "<div class='success'>Deleted Topic Failed.</div>";
        header('location:'.SITEURL.'/admin/topicsManagement.php');
    }
?>