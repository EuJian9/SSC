<?php require_once('common/function.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<style type="text/css">
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    }
    a.fancybox:hover img {
        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
    }


</style>

	<?php htmlheader(); ?>
	<title>Home</title>
</head>

<body>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>

<script>
	jQuery(function($){
		$('a.zoom').easyZoom();
	});
</script>


	<div class="body-inner">
		<?php include "common/header.php" ?>

		<!-- Slider start -->
		<section id="home">
			<!-- Carousel -->
			<div id="main-slide" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#main-slide" data-slide-to="0" class="active"></li>
					<li data-target="#main-slide" data-slide-to="1"></li>
					<li data-target="#main-slide" data-slide-to="2"></li>
					<li data-target="#main-slide" data-slide-to="3"></li>
					<li data-target="#main-slide" data-slide-to="4"></li>
					<li data-target="#main-slide" data-slide-to="5"></li>
				</ol><!--/ Indicators end-->

				<!-- Carousel inner -->

				<div class="carousel-inner">
					<div class="item active">
						<img class="img-responsive" src="images/slider/1.jpg" height="50" width="50" alt="slider">
						<div class="slider-content">
							<div class="col-md-12 text-center">
								<h2 class="animated2">
									<span>Welcome to <strong>SSC</strong></span>
								</h2>
								<h3 class="animated3">
									<span></span>
								</h3>
							</div>
						</div>
					</div><!--/ Carousel item end -->
					<div class="item">
						<img class="img-responsive" src="images/slider/2.jpg" alt="slider">
						<div class="slider-content">
							<div class="col-md-12 text-center">
								<h2 class="animated4">
									<span><strong>Building</strong> Micro Entrepreneurs</span>
								</h2>
								<h3 class="animated5">
									<span>Growing you from micro to macro</span>
								</h3>
							</div>
						</div>
					</div><!--/ Carousel item end -->
					<div class="item">
						<img class="img-responsive" src="images/slider/3.jpg" alt="slider">
						<div class="slider-content">
							<div class="col-md-12 text-center">
								<h2 class="animated6">
									<span>Experential <strong>Learning</strong></span>
								</h2>
								<h3 class="animated7">
									<span>Bring Back Instant Result</span>
								</h3>
							</div>
						</div>
					</div><!--/ Carousel item end -->
					<div class="item">
						<img class="img-responsive" src="images/slider/4.jpg" alt="slider">
						<div class="slider-content">
							<div class="col-md-12 text-center">
								<h2 class="animated8">
									<span>Accelerating <strong>Growth</strong></span>
								</h2>
								<h3 class="animated2">
									<span>bridging you to success</span>
								</h3>
							</div>
						</div>
					</div><!--/ Carousel item end -->

					<div class="item">
						<img class="img-responsive" src="images/slider/5.jpg" alt="slider">
						<div class="slider-content">
							<div class="col-md-12 text-center">
								<h2 class="animated3">
									<span>high-profile <strong>Networking</strong></span>
								</h2>
								<h3 class="animated4">
									<span>connecting you to business icons</span>
								</h3>
							</div>
						</div>
					</div><!--/ Carousel item end -->
					<div class="item">
						<img class="img-responsive" src="images/slider/6.jpg" alt="slider">
						<div class="slider-content">
							<div class="col-md-12 text-center">
								<h2 class="animated5">
									<span>Enhance Your <strong>Profile</strong></span>
								</h2>
								<h3 class="animated6">
									<span>preparing you to meet stakeholders</span>
								</h3>
							</div>
						</div>
					</div>
				</div><!-- Carousel inner end-->

				<!-- Controls -->
				<a class="left carousel-control" href="#main-slide" data-slide="prev">
					<span><i class="fa fa-angle-left"></i></span>
				</a>
				<a class="right carousel-control" href="#main-slide" data-slide="next">
					<span><i class="fa fa-angle-right"></i></span>
				</a>
			</div><!-- /carousel -->






		<?php include "common/footer.php" ?>
	</div>
</body>
</html>
