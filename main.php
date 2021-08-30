<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="content">
	<div class="container">
		<div class="col-xs-8">
			<div class="row">
                <div class="new_event row pt-5" style="margin-left : -10%">
                    <div class="col-xs-8 mx-auto col-lg mb-4 mb-lg-0">
                        <form method="GET" class="news-event">
                            <?php
                                $sql = "SELECT * FROM tbpost WHERE id = 1";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                            <li> 
                                <a class="image" href="post.php?id=<?php echo $row['id'];?>">
                                    <img  src="<?php echo SITEURL; ?>../images/<?php echo $row['postImage']; ?>" class="img-fluid img-full wp-post-image" alt="" >
                                </a>
                            </li>
                            <h3 class="h3 mb-3 mt-4" data-mh="title-height" style="font-size: 23px;">
                                <a style="text-decoration : none" class="font-weight-light" href="post.php?id=<?php echo $row['id'];?>">
                                    <?php echo $row['postTittle']; ?>
                                </a>
                            </h3>
                        </form>
                    </div>
                    <div class="col-xs-8 mx-auto col-lg mb-4 mb-lg-0">
                        <form class="news-event">
                            <?php
                                $sql = "SELECT * FROM tbpost WHERE id = 2";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                            <li>
                                <a class="image" href="post.php?id=<?php echo $row['id'];?>">
                                    <img src="<?php echo SITEURL; ?>../images/<?php echo $row['postImage']; ?>" class="img-fluid img-full wp-post-image" alt="" l >
                                </a>
                            </li>
                            <h3 class="h3 mb-3 mt-4" data-mh="title-height"  style="font-size: 23px;">
                                <a class="font-weight-light" href="post.php?id=<?php echo $row['id'];?>">
                                    <?php echo $row['postTittle']; ?>
                                </a>
                            </h3>
                        </form>
                    </div>      
                    <div class="col-xs-8 mx-auto col-lg mb-4 mb-lg-0">
                        <section class="news-event ">
                            <form method="GET">
                                <div class="px-0 py-3">
                                    <h2 class="text-capitalize font-weight-light m-0">News & Events</h2>
                                </div>
                                <div class="feature-box-list">
                                    <div class="d-block">
                                        <div class="item">
                                            <?php
                                                $sql = "SELECT * FROM tbpost WHERE id = 5";
                                                $result = mysqli_query($conn,$sql);
                                                $row = mysqli_fetch_assoc($result);
                                            ?>
                                            <h4 class="font-weight-bold"><a class="text-secondary" href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['postTittle']; ?></a></h4>
                                            <p> Do you want to challenge yourself to solve a difficult dilemma that a globally reputable company is […]<hr/></p>
                                        </div>
                                        <div class="item">
                                            <?php
                                                $sql = "SELECT * FROM tbpost WHERE id = 6";
                                                $result = mysqli_query($conn,$sql);
                                                $row = mysqli_fetch_assoc($result);
                                            ?>
                                            <h4 class="font-weight-bold"><a class="text-secondary" href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['postTittle']; ?></a></h4>
                                            <p>We are delighted to report that VinUniversity and Cornell University (US) signed the Letter of Intent to explore […]<hr/></p>
                                        </div>
                                        <div class="item">
                                            <?php
                                                $sql = "SELECT * FROM tbpost WHERE id = 7";
                                                $result = mysqli_query($conn,$sql);
                                                $row = mysqli_fetch_assoc($result);
                                            ?>
                                            <h4 class="font-weight-bold"><a class="text-secondary" href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['postTittle']; ?></a></h4>
                                            <p>As a start-up founder, how can you identify your target customers to offer appropriate services? What makes a […]<hr/></p>
                                        </div>
                                        <a class="btn btn-vin btn-vin--link text-secondary" href="">More News<hr/></a>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>     
                </div>
                <div class="abvin">
                    <div class="row news-event__list pt-5" style="margin-left : -10%; margin-top : 18%" >
                        <div class="col-12 col-md-6 mx-auto mb-5">
                            <form method="GET" class="news-event__item hover-image">
                                <?php
                                    $sql = "SELECT * FROM tbpost WHERE id = 3";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_assoc($result);
                                ?>
                                <li>
                                    <a class="image" href="post.php?id=<?php echo $row['id'];?>">
                                        <img  src="<?php echo SITEURL; ?>../images/<?php echo $row['postImage']; ?>" class="img-fluid img-full" alt="About VinUni" >
                                    </a>
                                </li>
                                <h3  class="h3 mb-3 mt-3" data-mh="title-height" style="height: 28px;"><a class="font-weight-bold text-secondary" href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['postTittle']; ?></a></h3>
                                <div class="mb-3 post-detail" data-mh="summary-height" style="height: 120px;">
                                    <p>VinUniversity aspires to be a world class university based on the highest international standards in research and teaching, with an intimate and intensive learning environment for students, highly accomplished faculty, and a commitment to global citizenship.</p>
                                </div>
                                <a class="btn btn-vin btn-vin--link text-secondary" href="post.php?id=<?php echo $row['id'];?>">Read More <i class="icon icon-arrow-next"></i></a>
                            </form>
                        </div>
                        <div class="col-12 col-md-6 mx-auto mb-5">
                            <form method="GET" class="news-event__item hover-image">
                                <?php
                                    $sql = "SELECT * FROM tbpost WHERE id = 4";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_assoc($result);
                                ?>
                                <li>
                                    <a class="image" href="post.php?id=<?php echo $row['id'];?>">
                                        <img  src="<?php echo SITEURL; ?>../images/<?php echo $row['postImage']; ?>" class="img-fluid img-full" alt="About VinUni" >
                                    </a>
                                </li>
                                <h3  class="h3 mb-3 mt-3" data-mh="title-height" style="height: 28px;"><a class="font-weight-bold text-secondary" href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['postTittle']; ?></a></h3>
                                <div class="mb-3 post-detail" data-mh="summary-height" style="height: 120px;"><ul style="margin-left: -6%;">
                                    <li><b>Freedom to Become: </b>Courses, projects, and internships that are interdisciplinary and designed with you in mind</li>
                                    <li><b>Local Context &amp; Global Outlook: </b>Industry and academic partnerships in Vietnam and around the world where you will learn from the experts in your field</li></ul>
                                </div>
                                <a class="btn btn-vin btn-vin--link text-secondary" href="post.php?id=<?php echo $row['id'];?>">Read More <i class="icon icon-arrow-next"></i></a>
                            </form>
                        </div>
         	        </div>
                </div>
            </div>
        </div>
    </div>
    </div><hr style="width: 90%; height: 2px;" /> 
        <div class="academic">
            <h2 style="color: #cd3c3f; margin-bottom : 25px" >Academic Program</h2>
            <div class="row ">
                <div class="col-md-6 block1">
                    <h1> <p>College of Business & Management </p></h1>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12 block2">
                                    <h1><p>College of Business & Management</p></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 block3">
                            <h1><p>College of Business & Management</p></h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 block4">
                    <h1><p>Faculty of Arts and Sciences</p></h1>
                </div>	
            </div>
        </div>
</div>