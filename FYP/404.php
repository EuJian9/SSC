<?php require_once('common/function.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php htmlheader(); ?>
	<title>404 Error | Akademi Usahawan Mikro</title>  
</head>

<body>
	<div class="body-inner">
		<?php include "common/header.php" ?>

		<!-- Subpage title start -->
		<section id="inner-title">
			<div class="container">
			  <div class="row">
				<div class="col-md-12">
					<div class="inner-title-content">
						<h2>404 Error</h2>
						<ul class="breadcrumb">
							<li><a href="index.html">Home </a></li>
							<li><a href="#"> 404 Error</a></li>
						</ul>
					</div>
				</div>
			  </div>
			</div>
		 </section>
		<!-- Subpage title end -->

		<div class="gap-40"></div>

		<section id="error" class="container text-center">
			<h1>404, Page not found</h1>
			<p>The Page you are looking for doesn't exist or an other error occurred.</p>
			<a class="btn btn-primary" href="index.html">GO BACK TO THE HOMEPAGE</a>
		</section><!--/#error-->

		<?php include "common/footer.php" ?>
	</div>
</body>
</html>