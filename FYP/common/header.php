<!-- Get URL -->
<?php 	$url = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
		if($url=="") $url = "index.html";
		?>



<!-- Header start -->

<header id="header" class="navbar-fixed-top main-nav" role="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--/ Top info start -->
				<div class="top-info">
					<ul class="pull-right">
						<li>
							<?php


							if(isset($_SESSION['username']))
							{
								$username= $_SESSION['username'];
								echo "<p>Hello\r".ucfirst($username)."'s </a>";
								echo "|";
								echo "< href='logout.php' target='_blank'>Logout</a></p>";

							}
						else
							{
								echo "<p><a href='register.php' target='_blank'>Register</a>";
								echo "  |   ";
								echo "<a href ='login.php' target='_blank'><img src = 'images/loginButton.png' height ='30' width = '60'></p>";


							}
						?>
					</li>
						<!-- Social links -->

						<li class="social-icon">
							<a id="tooltip1" data-toggle="tooltip" data-placement="top" title="Facebook" href="https://www.facebook.com/go2aum">
								<i class="fa fa-facebook"></i>
							</a>
							<a id="tooltip3" data-toggle="tooltip" data-placement="top" title="Instagram" href="http://instagram.com/go2aum">
								<i class="fa fa-instagram"></i>
							</a>
							<a id="tooltip2" data-toggle="tooltip" data-placement="top" title="Youtube" href="https://www.youtube.com/channel/UCLJmS02LZmOyWL90tc6QyKA">
								<i class="fa fa-youtube"></i>
							</a>
						</li><!-- Social links end-->
					</ul>
				</div><!--/ Top info end -->

				<!-- Logo start -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php">
						<img class="img-responsive" src="images/Picture2.png" height ="150" width ="150" alt="logo">
					</a>
				</div><!--/ Logo end -->

				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
							<li <?php if ($url=='' || $url=='') echo 'class="dropdown active"'; else echo 'class="dropdown"'?>>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu">
						<li <?php if ($url == '') echo 'class="active"'?>><a href="">PALS</a></li>
						<li <?php if ($url == 'working/index.php') echo 'class="active"'?>><a href="working/index.php">SSC Workshop</a></li>
						<li <?php if ($url == '') echo 'class="active"'?>><a href="">Appointment</a></li>
						</ul>
					</li>
							<li <?php if ($url == 'gallery.php') echo 'class="active"'?>><a href="gallery.php">Gallery</a></li>
							<li <?php if ($url == 'contact.php') echo 'class="active"'?>><a href="contact.php">Contact</a></li>

					</ul>
				</nav><!--/ Navigation end -->


			</div><!--/ Col end -->
		</div><!--/ Row end -->
	</div><!--/ Container end -->
</header><!--/ Header end -->

<?php if ($url != 'index.php') { ?>
<div id="inner-header">
	<img src="images/banner/banner<?php echo rand(1,5);?>.jpg" alt ="Banner" />
</div>
<?php } ?>
