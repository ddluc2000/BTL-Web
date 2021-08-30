<?php 
    include('header.php');
?>
<div class="main-content">
    <div class="wrapper">
        <h1 class="text-center">Manage Posts</h1>
        <br>
        <form method="POST" class="row" action="<?php echo SITEURL; ?>/admin/search.php">
            <input name="searchText" style="width:30%; text-align:center; margin-left:34%" type="text">
            <button type="submit" >
                <span >
                    <img src="https://vinuni.edu.vn/wp-content/themes/vinuni/assets/images/search.png" alt="icon search">
                </span>
            </button>
        </form>
        <br>
        <div class="dropdown">
            <button style="margin-left:10px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <form method="GET" action="">
                    <?php
                        $sql = "SELECT * FROM tbtopic";
                        $res = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($res)>0){
                            while($row = mysqli_fetch_assoc($res)){
                    ?>                        
                                <li><a class = "dropdown-item" href="filterPost.php?id=<?php echo $row['id']?>"><?php echo $row['topicName'];?></a></li>                        
                    <?php
                            }
                        }
                    ?>
                </form>
            </ul>
        </div>
        <br />
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
        <a href="addPost.php" class="btn-primary size-button">Add Post</a>
        <br /><br /><br />
        
    <div>
        <?php 
            $sql1 = "SELECT * FROM tbpost";
            $result1 = mysqli_query($conn,$sql1);
            if(mysqli_num_rows($result1)>0){
                $i = 1;
        ?>
                <table class="table">
                    <thead class="thead-dark">
                        <tr class="t-tittle">
                            <th scope="col">TT</th>
                            <th scope="col">Post Tittle</th>
                            <th scope="col">Post Image</th>
                            <th scope="col">Post Content</th>
                            <th scope="col">Topic Name</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row1 = mysqli_fetch_assoc($result1)){
                                $id = $row1['id'];
                                $idtopic = $row1['topicId'];
                                $sql2 = "SELECT * FROM tbtopic WHERE id=$idtopic";
                                $result2 = mysqli_query($conn,$sql2);
                                $row2 = mysqli_fetch_assoc($result2);                            
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $i ;?></th>
                                    <td style="width:30%;"><?php echo $row1['postTittle'];?></td>
                                    <td>
                                        <?php  
                                                //Chcek whether image name is available or not
                                                if($row1['postImage']!="")
                                                {
                                                    //Display the Image
                                                    ?>
                                                    
                                                    <img src="<?php echo SITEURL; ?>../images/<?php echo $row1['postImage']; ?>" width="100px" >
                                                    
                                                    <?php
                                                }
                                                else
                                                {
                                                    //DIsplay the MEssage
                                                    echo "<div class='error'>Image not Added.</div>";
                                                }
                                            ?>
                                    </td>
                                    <td style="width:30%;"><?php echo $row1['postContent'];?></td>
                                    <td><?php echo $row2['topicName'];?></td>
                                    <td>
                                        <a href="editPost.php?id=<?php echo $id ?>" class="btn-secondary size-button">Edit Post</a>
                                        <a href="deletePost.php?id=<?php echo $id ?>" class="btn-danger size-button">Delete Post</a>
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