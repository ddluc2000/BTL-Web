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
                        <td>Fullname</td>
                        <td>
                            <input type="text" name="txtFullname" placeholder="Mời bạn nhập!">
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" name="txtUsername" placeholder="Mời bạn nhập!">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="txtEmail" placeholder="Mời bạn nhập!">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="txtPass" placeholder="Mời bạn nhập!">
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
                    $fullname   = $_POST['txtFullname'];
                    $email  = $_POST['txtEmail'];
                    $username = $_POST['txtUsername'];
                    $pass   = $_POST['txtPass'];
                    // $pass_md5   = md5($pass);
                    //Kiểm tra: Dữ liệu người dùng nhập có đang BỎ TRỐNG trường nào KO?
                    //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
                    //Kiểm tra: Trước khi thêm Tài khoản, phải kiểm tra username và email này có tồn tại chưa?
                    //Nếu chưa tồn tại thì mới thêm;
                    //Bước 02: Thực hiện truy vấn
                    $sql = "INSERT INTO tbadmin (id, fullName, userName, email, passWord)
                            VALUES ('$id','$fullname','$username',' $email','$pass')";
                    if(mysqli_query($conn,$sql)){
                        $_SESSION['add'] = "<div class='success'>User Added Successfully.</div>";
                        header('location:'.SITEURL.'/admin/usersManagement.php');
                    }
                    else{
                        $_SESSION['add-mes'] = "<div class='success'>User Added Failed.</div>";
                        header('location:'.SITEURL.'/admin/usersManagement.php');
                    }
                }
            ?>
        </main>
    </div>
<?php include("footer.php"); ?>