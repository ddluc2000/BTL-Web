<?php 
    ob_start();
    include('header.php'); ?>
<div class="main-content">
    <div id="main-main" class="container-fluid" >
        <main>
            <?php   
            if(isset($_GET['id']))
            {
                $getid = $_GET['id'];
                $sql = "SELECT * FROM tbpost WHERE id= $getid ";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    $row = mysqli_fetch_assoc($result);
                    $id = $row['id'];
                    $tittle = $row['postTittle'];
                    $currentImage = $row['postImage'];
                    $content = $row['postContent'];
                    $topicid = $row['topicId'];
                }
                else
                {
                    header('location:'.SITEURL.'/admin/postsManagement.php');
                }
            }
            else
            {
                header('location:'.SITEURL.'/admin/postsManagement.php');
            }
            ?>
            <form method="POST" action="">
                <table>
                    <tr>
                        <td>
                            <input type="hidden" name="txtId" value="<?php echo $id; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Post Tittle</td>
                        <td>
                            <input type="text" name="txtTittle" value="<?php echo $tittle; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Current Image: </td>
                        <td>
                            <?php 
                                if($currentImage != "")
                                {
                                    //Display the Image
                                    ?>
                                    <img src="<?php echo SITEURL; ?>../images/<?php echo $currentImage; ?>" width="150px">
                                    <?php
                                }
                                else
                                {
                                    //Display Message
                                    echo "<div class='error'>Image Not Added.</div>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Post Image</td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>
                    <tr>
                        <td>Post Content</td>
                        <td>
                            <input type="text" name="txtContent" value="<?php echo $content; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Topic Id</td>
                        <td>
                            <select name="txttopicId" class="form-control form-control-sm">
                                <?php
                                    $sql1 = "SELECT * FROM tbtopic";
                                    $res1 = mysqli_query($conn,$sql1);
                                    if(mysqli_num_rows($res1)>0){
                                        while($row = mysqli_fetch_assoc($res1)){
                                ?>                        
                                            <option><?php echo $row['id']."-".$row['topicName'];?></option>                       
                                <?php
                                        }
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="hidden" name="currentImage" value="<?php echo $currentImage; ?>">
                            <input type="submit" name="btnEdit" value="Save" class="btn btn-success">
                        </td>
                    </tr>                   
                </table>
            </form>
            <?php
                if(isset($_POST['btnEdit'])){
                    $id     = $_POST['txtId'];
                    $currentImage   = $_POST['currentImage'];
                    
                    $tittle  = $_POST['txtTittle'];
                    $content  = $_POST['txtContent'];
                    $topicid  = $_POST['txttopicId'];
                    if(isset($_FILES['image']['name']))
                    {
                        //Get the Image Details
                        $image_name = $_FILES['image']['name'];
                        if($image_name != "")
                        {
                            $ext = end(explode('.', $image_name));
                            $image_name = "POST_".rand(000, 999).'.'.$ext;
                            

                            $source_path = $_FILES['image']['tmp_name'];

                            $destination_path = "../images/".$image_name;

                            $upload = move_uploaded_file($source_path, $destination_path);

                            if($upload==false)
                            {
                                $_SESSION['upload'] = "<div class='error'>Failed to Upload Image. </div>";
                                header('location:'.SITEURL.'admin/postsManagement.php');
                                die();
                            }
                            //B. Remove the Current Image if available
                            if($currentImage!="")
                            {
                                $remove_path = "../images/".$currentImage;

                                $remove = unlink($remove_path);

                                if($remove==false)
                                {
                                    //Failed to remove image
                                    $_SESSION['failed-remove'] = "<div class='error'>Failed to remove current Image.</div>";
                                    header('location:'.SITEURL.'admin/postsManagement.php');
                                    die();//Stop the Process
                                }
                            }
                        }
                    }
                    $image = $_POST ['image'];
                    if($image=="")
                    {
                        $image = $currentImage;
                    }
                    $sql1 = "UPDATE tbpost SET
                        id = '$id', 
                        postImage = '$image', 
                        postTittle = '$tittle',
                        postContent = '$content',
                        topicId = '$topicid' WHERE id = $getid ";
                    if(mysqli_query($conn,$sql1)){
                        $_SESSION['edit'] = "<div class='success'>Post Edited Successfully.</div>";
                        header('location:'.SITEURL.'/admin/postsManagement.php');
                    }
                    else{
                        $_SESSION['edit-mes'] = "<div class='success'>Post Edited Failed.</div>";
                        header('location:'.SITEURL.'/admin/postsManagement.php');
                    }
                }
            ?>
<?php include('footer.php'); 
        ob_end_flush(); ?>