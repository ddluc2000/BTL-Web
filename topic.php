<?php include('admin/config/db.php'); ?>
<!DOCTYPE html>
<html lang="en" style=" overflow-x: hidden !important;">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Topic-VinUni</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" type="image/ico" href="icon/logo.ico">
	</head>
	<body>
		<?php include ('header.php'); 
        if(isset($_GET['id'])){
            $getid = $_GET['id'];
            $sql = "SELECT * FROM tbtopic WHERE id=$getid";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result)>0){
        ?>      
                <form method="GET" class="row row1">
                    <div class="container px-4 py-5" id="featured-3">
                        <h2 class="pb-2 border-bottom unit-tt"><?php echo ($row['topicName']);?></h2>
                        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                            <?php
                                $topicid = $row['id'];   
                                $sql1 = "SELECT * FROM tbpost WHERE topicId = $topicid";
                                $result1 = mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result1)>0){
                                    while($row1 = mysqli_fetch_assoc($result1)){
                            ?>
                                        <div class="feature col bg-white" style="padding:10px;">
                                            <?php 
                                                if($row1['postImage'] != "")
                                                {
                                                    //Display the Image
                                                    ?>
                                                    <img src="<?php echo SITEURL; ?>../images/<?php echo $row1['postImage']; ?>" width="100%" height="240px">
                                                    <?php
                                                }
                                                else
                                                {
                                                    //Display Message
                                                    echo "<div class='error'>Image Not Added.</div>";
                                                }
                                            ?>
                                            <div class="bg-white">
                                                <p style="padding:8px; height:100px;">
                                                    <?php echo($row1['postTittle']);?>
                                                </p>
                                                <a href="post.php?id=<?php echo($row1['id']);?>" class="link">
                                                    Read more
                                                </a>
                                            </div>
                                        </div>
                        <?php
                                }
                            }
                        ?>
                        </div>
                    </div>
                </form>
                <?php
            }
        }
        else { 
            echo "<div class='error'>Not data.</div>";
        }

        ?>
		<?php include('footer.php'); ?>
	</body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</html>