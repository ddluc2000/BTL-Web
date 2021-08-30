<?php 
    include('header.php');
?>
<div class="main-content">
    <div class="wrapper">
        <h1 class="text-center">Manage Users</h1>
        <br>
        <?php 
            if(isset($_SESSION['add'])){
        ?>  <br>
        <?php
                echo $_SESSION['add'];
                unset($_SESSION['add']);
        ?>  <br>
        <?php
            }
            if(isset($_SESSION['add-mes']))
            {
        ?>  <br>
        <?php
                echo $_SESSION['add-mes'];
                unset($_SESSION['add-mes']);
        ?>  <br>
        <?php
            }
        ?>
        <?php 
            if(isset($_SESSION['edit'])){
        ?>  <br>
        <?php
                echo $_SESSION['edit'];
                unset($_SESSION['edit']);
        ?>  <br>
        <?php
            }
            if(isset($_SESSION['edit-mes']))
            {
        ?>  <br>
        <?php
                echo $_SESSION['edit-mes'];
                unset($_SESSION['edit-mes']);
        ?>  <br>
        <?php
            }
        ?>
        <?php 
            if(isset($_SESSION['delete'])){
        ?>  <br>
        <?php
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
        ?>  <br>
        <?php
            }
            if(isset($_SESSION['delete-mes']))
            {
        ?>  <br>
        <?php
                echo $_SESSION['delete-mes'];
                unset($_SESSION['delete-mes']);
        ?>  <br>
        <?php
            }
        ?>
        <br />
        <a href="addUser.php" class="btn-primary size-button">Add User</a>
        <br /><br /><br />
    <div>
        <?php 
            $sql = "SELECT * FROM tbadmin";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                $i = 1;
        ?>
                <table class="table">
                    <thead class="thead-dark">
                        <tr class="t-tittle">
                            <th scope="col">TT</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($rows = mysqli_fetch_assoc($result)){
                                $id = $rows['id'];                              
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $i ;?></th>
                                    <td><?php echo $rows['fullName'];?></td>
                                    <td><?php echo $rows['userName'];?></td>
                                    <td><?php echo $rows['email'];?></td>
                                    <td><?php echo $rows['passWord'];?></td>
                                    <td>
                                        <a href="editUser.php?id=<?php echo $id ?>" class="btn-secondary size-button">Edit User</a>
                                        <a href="deleteUser.php?id=<?php echo $id ?>" class="btn-danger size-button">Delete User</a>
                                    </td>
                                </tr>
                                <?php
                                    $i++ ;
                            }
                        ?>   
                    </tbody>
                </table>
            <?php    
            }
            else {
            ?>
                <h3><?php echo ("Không có dữ liệu!");?></h3>
            <?php
            }
            ?>            
    </div>  
</div>
<?php include('footer.php'); ?>