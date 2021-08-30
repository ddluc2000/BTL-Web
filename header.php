<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">

<header>
	<div class="head">
		<div class="head_top" id="head_top">
			<div class="head_top_left">
				<ul>
					<li>
						<a href="#">VISIT</a>
					</li>
					<li>
						<a href="topic.php?id=2">DIRECTORY</a>
					</li>
					<li style="border: 0px;"> 
						<a  href="#">CONTACT</a>
					</li>
				</ul>
			</div>
			<div class="head_top_right">
				<div class="head_top_right_search">
				  	<form method="POST" id="search" action="<?php echo SITEURL; ?>/search.php">
						<input  type="text" name="searchText">
						<button type="submit" >
							<span class="search-button">
								<img src="https://vinuni.edu.vn/wp-content/themes/vinuni/assets/images/search.png" alt="icon search">
							</span>
						</button>
				 	</form>
				</div>
			</div>
		</div>
		<div class="head_bottom"id="head_bottom" style="box-shadow: black 0px 12px 9px -8px; animation: 0s ease 0s 1 normal none running none;">
			<div class="head_bottom_left">
				<a class="logo" href="index.php">
					<img src="https://vinuni.edu.vn/wp-content/themes/vinuni/assets/images/logo/logo.svg" alt="Logo VinUni" >
				</a>
			</div>
			<div class="head_bottom_right">
				<ul class="parent">
					<li class="boder">
						<a href="#">About VinUniversity</a>
						<div class="head_bottom_right_contenhover">
							<ul>
								<li>
									<a href="#">About The Founding Donor – Vingroup JSC</a>
								</li>
								<li>
									<a href="#">About VinUniversity</a>
								</li>
								<li>
									<a href="#">Governance</a>
								</li>
								<li>
									<a href="#">Strategic Collaborators and Partners</a>
								</li>
								<li>
									<a href="topic.php?id=1">News & Events</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="boder">
						<a href="#">Academics</a>
						<div class="head_bottom_right_contenhover">
							<ul>
								<li>
									<a href="#">Academics</a>
								</li>
								<li>
									<a href="#">College of Business & Management</a>
								</li>
								<li>
									<a href="#">College of Engineering & Computer Science</a>
								</li>
								<li>
									<a href="#">College of Health Sciences</a>
								</li>
								<li>
									<a href="#">Faculty of Arts and Sciences</a>
								</li>
								<li>
									<a href="#">Registrar</a>
								</li>
								<li>
									<a href="#">Library</a>
								</li>
								<li>
									<a href="#">Canvas@VinUniversity</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="boder">
						<a href="#">Research</a>
						<div class="head_bottom_right_contenhover">
							<ul>
								<li>
									<a href="#">VinUniversity Distinguished Lecture Series</a>
								</li>
								<li>
									<a href="#">Research Seminars</a>
								</li>
								<li>
									<a href="#">Undergraduate Research</a>
								</li>
								<li>
									<a href="#">Seed Funding Program</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="boder">
						<a href="#">Admissions & Aid</a>
						<div class="head_bottom_right_contenhover">
							<ul>
								<li>
									<a href="#">Undergraduate</a>
								</li>
								<li>
									<a href="#">Postgraduate</a>
								</li>
								<li>
									<a href="#">Overseas Master/PhD Scholarships</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="boder">
						<a href="#">Student Life</a>
						<div class="head_bottom_right_contenhover">
							<ul>
								<li>
									<a href="#">Our Campus</a>
								</li>
								<li>
									<a href="#">Life at VinUni</a>
								</li>
								<li>
									<a href="#">First Year Experience</a>
								</li>
								<li>
									<a href="#">Career Services</a>
								</li>
								<li>
									<a href="#">Library</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="boder">	
					<a href="">Working@VinUn</a>
						<div class="head_bottom_right_contenhover">
							<ul>
								<li>
									<a href="">Job Opportunities</a>
								</li>
								<li>
									<a href="">People@VinUni</a>
								</li>
								<li>
									<a href="admin/login.php">Login</a>
								</li>
							</ul>
						</div>						
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>