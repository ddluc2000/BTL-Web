<?php include('header.php'); ?>
<div class="main-content">
    <div id="main-main" class="container-fluid" >
        <main>
            <?php   
            if(isset($_GET['id']))
            {
                $getid = $_GET['id'];
                $sql = "SELECT * FROM tbadmin WHERE id= $getid ";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    $row = mysqli_fetch_assoc($result);
                    $id = $row['id'];
                    $fullname = $row['fullName'];
                    $username = $row['userName'];
                    $email = $row['email'];
                    $pass = $row['passWord'];
                }
                else
                {
                    header('location:'.SITEURL.'/admin/usersManagement.php');
                }
            }
            else
            {
                header('location:'.SITEURL.'/admin/usersManagement.php');
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
                        <td>Fullname</td>
                        <td>
                            <input type="text" name="txtFullname" value="<?php echo $fullname ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" name="txtUsername" value="<?php echo $username ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="txtEmail" value="<?php echo $email ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="txtPass" value="<?php echo $pass ?>">
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
                    $fullname   = $_POST['txtFullname'];
                    $email  = $_POST['txtEmail'];
                    $username = $_POST['txtUsername'];
                    $pass   = $_POST['txtPass'];
                    $sql1 = "UPDATE tbadmin SET
                        id = '$id', 
                        fullName = '$fullname', 
                        userName = '$username',
                        email = '$email',
                        passWord = '$pass' WHERE id = $getid ";
                    if(mysqli_query($conn,$sql1)){
                        $_SESSION['edit'] = "<div class='success'>User Edited Successfully.</div>";
                        header('location:'.SITEURL.'/admin/usersManagement.php');
                    }
                    else{
                        $_SESSION['edit'] = "<div class='success'>User Edited Failed.</div>";
                        header('location:'.SITEURL.'/admin/usersManagement.php');
                    }
                }
            ?>
<?php include('footer.php'); ?>