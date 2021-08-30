<?php
    include("header.php");
?>
<div class="container-fluid">
    <br>
    <form method="POST" class="row" action="<?php echo SITEURL; ?>/search.php">
        <input name="searchText" style="width:30%; text-align:center; margin-left:34%" type="text">
        <button type="submit" >
			<span >
				<img src="https://vinuni.edu.vn/wp-content/themes/vinuni/assets/images/search.png" alt="icon search">
			</span>
		</button>
    </form>
    <br> <br>
    <div class="row row-nav">
        <h2>Dashboard</h2>
    </div>
    <?php 
        if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
        else{
            header('Location:'.SITEURL.'/admin/login.php');
        }
    ?>
    <br><br>
    <div class="row row-content">
        <div class="col col-md-4 content">
            <div class="row row-nav row-nav-ct">
                <h3>Users</h3>
            </div>    
            <div class="row row-content-ct">
                <h3>
                    <?php                          
                        $sql1 = "SELECT * FROM tbadmin";
                        $result1 = mysqli_query($conn,$sql1);
                        $count_users = mysqli_num_rows($result1);
                        echo $count_users;
                    ?>
                </h3>
            </div>
        </div>
        <div class="col col-md-4 content">   
            <div class="row row-nav row-nav-ct">
                <h3>Topic</h3>
            </div>
            <div class="row row-content-ct">
                <h3>
                    <?php       
                        $sql2 = "SELECT * FROM tbtopic";
                        $result2 = mysqli_query($conn,$sql2);
                        $count_topic = mysqli_num_rows($result2);
                        echo $count_topic;
                    ?>
                </h3>
            </div> 
        </div>
        <div class="col col-md-4 content">   
            <div class="row row-nav row-nav-ct">
                <h3>Posts</h3>
            </div>
            <div class="row row-content-ct">
                <h3>
                    <?php                          
                        $sql3 = "SELECT * FROM tbpost";
                        $result3 = mysqli_query($conn,$sql3);
                        $count_posts = mysqli_num_rows($result3);
                        echo $count_posts;
                        mysqli_close($conn);
                    ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<?php
    include("footer.php");
?>