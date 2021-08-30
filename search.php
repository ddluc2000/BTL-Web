<?php include('admin/config/db.php'); ?>
<!DOCTYPE html>
<html lang="en" style=" overflow-x: hidden !important;">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home-VinUni</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" type="image/ico" href="icon/logo.ico">
	</head>
	<body>
		<?php
			$search = mysqli_real_escape_string($conn, $_POST['searchText']);
			include ('header.php');
        ?>
            <div style="margin-top:50px;" class="container">
                <form method="POST" class="row">
                    <input name="searchText" style="width:100%; text-align:center;" type="text" value ="<?php echo $search; ?>" >
                </form>
                <div class="row" style="margin-top:50px;">
                    <?php
                        $sql = "SELECT * FROM tbpost WHERE postTittle LIKE '%$search%' OR postContent LIKE '%$search%'" ;
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){     
                    ?>
                                <div class="col-4">
                                    <div class="row">
                                        <img src="<?php echo SITEURL; ?>../images/<?php echo $row['postImage']; ?>" width="100%" height="240px">
                                    </div>
                                    <div class="bg-white">
                                        <p style="padding:8px; height:100px;">
                                            <?php echo($row['postTittle']);?>
                                        </p>
                                        <a href="post.php?id=<?php echo($row['id']);?>">
                                            Read more
                                        </a>
                                    </div>
                                </div>
                    <?php
                                
                            }
                        }
                    ?>
                    <?php
                        $sql1 = "SELECT * FROM tbtopic WHERE topicTittle LIKE '%$search%'";
                        $result1 = mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($result1)>0){
                            while($row1 = mysqli_fetch_assoc($result1)){     
                    ?>
                                <div class="col-4">
                                    <h3 class="bg-primary"><?php echo $row1['topicTittle']; ?></h3>
                                </div>
                    <?php
                                
                            }
                        }
                    ?>
                </div>
            </div>
        <?php
			include('footer.php'); 
		?>
	</body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</html>