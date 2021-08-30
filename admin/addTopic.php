<?php include("header.php"); ?>            
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
                        <td>Topic Name</td>
                        <td>
                            <input type="text" name="txtName" placeholder="Mời bạn nhập!">
                        </td>
                    </tr>
                    <tr>
                        <td>Topic Tittle</td>
                        <td>
                            <input type="text" name="txtTittle" placeholder="Mời bạn nhập!">
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
                    $id     = $_POST['txtId'];
                    $name   = $_POST['txtName'];
                    $tittle  = $_POST['txtTittle'];
                    $sql = "INSERT INTO tbtopic (id, topicName, topicTittle)
                            VALUES ('$id','$name','$tittle')";
                    if(mysqli_query($conn,$sql)){
                        $_SESSION['add'] = "<div class='success'>Topic Added Successfully.</div>";
                        header('location:'.SITEURL.'/admin/topicsManagement.php');
                    }
                    else{
                        $_SESSION['add-mes'] = "<div class='success'>Topic Added Failed.</div>";
                        header('location:'.SITEURL.'/admin/topicsManagement.php');
                    }
                }
            ?>
        </main>
    </div>
<?php include("footer.php"); ?>