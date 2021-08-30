<?php include('header.php'); ?>
<div class="main-content">
    <div id="main-main" class="container-fluid" >
        <main>
            <?php   
            if(isset($_GET['id']))
            {
                $getid = $_GET['id'];
                $sql = "SELECT * FROM tbtopic WHERE id= $getid ";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    $row = mysqli_fetch_assoc($result);
                    $id = $row['id'];
                    $name = $row['topicName'];
                    $tittle = $row['topicTittle'];
                }
                else
                {
                    header('location:'.SITEURL.'/admin/topicsManagement.php');
                }
            }
            else
            {
                header('location:'.SITEURL.'/admin/topicsManagement.php');
            }
            ?>
            <form method="POST" action="">
                <table>
                    <tr>
                        <td>
                            <input type="hidden" name="txtId" value="<?php echo $id ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Topic Name</td>
                        <td>
                            <input type="text" name="txttopicName" value="<?php echo $name ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Topic Title</td>
                        <td>
                            <input type="text" name="txttopicTittle" value="<?php echo $tittle ?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnEdit" value="Save" class="btn btn-success">
                        </td>
                    </tr>                   
                </table>
            </form>
            <?php
                if(isset($_POST['btnEdit'])){
                    $id     = $_POST['txtId'];
                    $name   = $_POST['txttopicName'];
                    $tittle  = $_POST['txttopicTittle'];
                    $sql1 = "UPDATE tbtopic SET
                        id = '$id', 
                        topicName = '$name', 
                        topicTittle = '$tittle' WHERE id = $getid ";
                    if(mysqli_query($conn,$sql1)){
                        $_SESSION['edit'] = "<div class='success'>Topic Edited Successfully.</div>";
                        header('location:'.SITEURL.'/admin/topicsManagement.php');
                    }
                    else{
                        $_SESSION['edit'] = "<div class='success'>Topic Edited Failed.</div>";
                        header('location:'.SITEURL.'/admin/topicsManagement.php');
                    }
                }
            ?>
<?php include('footer.php'); ?>