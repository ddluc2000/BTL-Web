<?php 
    include('header.php');
?>
<div class="main-content">
    <div class="wrapper">
        <h1 class="text-center">Manage Posts</h1>
        <br>
        <form method="POST" class="row" action="<?php echo SITEURL; ?>/search.php">
            <input name="searchText" style="width:30%; text-align:center; margin-left:34%" type="text" value="<?php $search = mysqli_real_escape_string($conn, $_POST['searchText']); echo $search; ?>">
            <button type="submit" >
                <span >
                    <img src="https://vinuni.edu.vn/wp-content/themes/vinuni/assets/images/search.png" alt="icon search">
                </span>
            </button>
        </form>
        <br>
    <div>
        <?php
            $search = $_POST['searchText'];
            $sql = "SELECT * FROM tbpost WHERE postTittle LIKE '%$search%' OR postContent LIKE '%$search%'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($rows = mysqli_fetch_assoc($result)){
                                $id = $rows['id'];
                                $idtopic = $rows['topicId'];
                                $sql2 = "SELECT * FROM tbtopic WHERE id=$idtopic";
                                $result1 = mysqli_query($conn,$sql2);
                                $row = mysqli_fetch_assoc($result1);                            
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $i ;?></th>
                                    <td style="width:30%;"><?php echo $rows['postTittle'];?></td>
                                    <td>
                                        <?php  
                                                //Chcek whether image name is available or not
                                                if($rows['postImage']!="")
                                                {
                                                    //Display the Image
                                                    ?>
                                                    
                                                    <img src="<?php echo SITEURL; ?>../images/<?php echo $rows['postImage']; ?>" width="100px" >
                                                    
                                                    <?php
                                                }
                                                else
                                                {
                                                    //DIsplay the MEssage
                                                    echo "<div class='error'>Image not Added.</div>";
                                                }
                                            ?>
                                    </td>
                                    <td style="width:30%;"><?php echo $rows['postContent'];?></td>
                                    <td><?php echo $row['topicName'];?></td>
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