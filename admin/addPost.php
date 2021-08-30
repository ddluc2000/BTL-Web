<?php ob_start(); include("header.php"); ?>            
    <div id="main-main" class="container-fluid">
        <main>
            <form method="POST" action="">
                <table>
                    <tr>
                        <td>
                            <input type="hidden" name="txtId" placeholder="Mời bạn nhập!">
                        </td>
                    </tr>
                    <tr>
                        <td>Post Tittle</td>
                        <td>
                            <input type="text" name="txtTittle" placeholder="Mời bạn nhập!">
                        </td>
                    </tr>
                    <tr>
                        <td>Post Image</td>
                        <td>
                            <input type="file" name="image" placeholder="Mời bạn nhập!">
                        </td>
                    </tr>
                    <tr>
                        <td>Post Content</td>
                        <td>
                            <input type="text" name="txtContent" placeholder="Mời bạn nhập!">
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
                            <input type="submit" name="btnAdd" value="Save" class="btn btn-success">
                        </td>
                    </tr>                  
                </table>
            </form>
            <?php
                if(isset($_POST['btnAdd'])){
                    if(isset($_FILES['image']['name']))
                    {
                        //Upload the Image
                        //To upload image we need image name, source path and destination path
                        $image_name = $_FILES['image']['name'];
                        
                        // Upload the Image only if image is selected
                        if($image_name != "")
                        {

                            //Auto Rename our Image
                            $ext = end(explode('.', $image_name));

                            //Rename the Image
                            $image_name = "POST_".rand(000, 999).'.'.$ext;
                            

                            $source_path = $_FILES['image']['tmp_name'];

                            $destination_path = "../images/".$image_name;

                            $upload = move_uploaded_file($source_path, $destination_path);
                            if($upload==false)
                            {
                                $_SESSION['upload'] = "<div class='error'>Failed to Upload Image. </div>";
                                header('location:'.SITEURL.'admin/addPost.php');
                                die();
                            }

                        }
                    }
                    else
                    {
                        //Don't Upload Image and set the image_name value as blank
                        $image_name="";
                    }
                    $id     = $_POST['txtId'];
                    $image   = $_POST['image'];
                    $tittle  = $_POST['txtTittle'];
                    $content  = $_POST['txtContent'];
                    $topicid  = $_POST['txttopicId'];
                    $sql = "INSERT INTO tbpost (id, postTittle, postImage, postContent, topicId)
                            VALUES ('$id','$tittle','$image','$content','$topicid')";
                    if(mysqli_query($conn,$sql)){
                        $_SESSION['add'] = "<div class='success'>Post Added Successfully.</div>";
                        header('location:'.SITEURL.'/admin/postsManagement.php');
                    }
                    else{
                        $_SESSION['add-mes'] = "<div class='success'>Post Added Failed.</div>";
                        header('location:'.SITEURL.'/admin/postsManagement.php');
                    }
                }
            ?>
        </main>
    </div>
<?php include("footer.php"); ob_end_flush(); ?>