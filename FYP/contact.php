<?php require_once('common/function.php');

	if (isset($_POST['submit'])){
		// Email START
		$email 	 = "";

		// Item
		$cmail	  = $_POST['email'];
		$subject  = $_POST['subject'];
		$message  = "Dear ,<br>You received an inquiry from :<br>Name : ".$_POST['name']."<br>Email : ".$cmail."<br>No HP : ".$_POST['phone'];
		$message .=	"<br>Message :<br>".$_POST['message'];

		// Header
		$headers  = "From:".$cmail."\r\n";
		$headers .= "Reply-To:".$cmail."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		mail($email, $subject, $message, $headers);
		// Email END
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php htmlheader(); ?>
	<title>Contact Us</title>
</head>

<body>
	<div class="body-inner">
		<?php include "common/header.php" ?>


		<div class="gap-40"></div>

		<!-- Contact page start -->
		<section id="Contact-page">
			<div class="container">
				<div class="row">
					<!-- Map start here -->
					<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15936.474448856356!2d101.60662043865584!3d3.0629442603590515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m5!1s0x31cc4b62bb0c3cf9%3A0x6168046c5260cde6!2sJalan+Taylors%2C+47500+Petaling+Jaya%2C+Selangor!3m2!1d3.0629443!2d101.6158473!4m0!5e0!3m2!1sen!2smy!4v1443258691006" width="650" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<!-- Map end here -->

					<!-- Contact form start -->
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="contact-form">
							<h3>Contact us</h3>
							<form action="contact.html" method="post" role="form">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Name</label>
											<input class="form-control" name="name" id="name" placeholder="Please insert your name" required />
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Phone</label>
											<input type="text" class="form-control" name="phone" id="phone" placeholder="Please insert your phone no" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" name="email" id="email" placeholder="Please insert your email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Subject</label>
											<input class="form-control" name="subject" id="subject" placeholder="What do you want to know?" required>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Message</label>
									<textarea class="form-control" name="message" id="message" placeholder="Let us know more detail about your inquiry" rows="8" required></textarea>
								</div>
								<div><br>
									<button class="btn btn-primary" type="submit" name="submit" id="submit">Send Message</button>
								</div>
							</form>
						</div><!-- Contact form end -->
					</div> <!-- Col end -->

					<!-- sidebar start -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="contact-info">
						<h3>Contact Info</h3>
						<br>
						<p><i class="fa fa-home"></i>	No. 1 Jalan Taylor's,47500 Subang Jaya,Selangor Darul Ehsan,Malaysia</p>
						<p><i class="fa fa-phone"></i>  <a href="tel:	603-5629 5000" style="color:black;">603-5629 5000</a></p>
						<p><i class="fa fa-envelope-o"></i>  <a href="mailto:studentsucesscenter@taylors.edu.my" style="color:black;">ssc@taylors.edu.my</a></p>
						<p><i class="fa fa-globe"></i>  <a href="http://university.taylors.edu.my/teaching-learning/student-success-centre" style="color:black;">Student Success Centre</a></p>
						<p style="color:black"> Find Us On : </p>
							<a href="https://www.facebook.com/ssctaylors?fref=ts"><img src= "images/face.png" height="50" width="50">
						</div>
					</div><!-- sidebar end -->
				</div><!--/ row end -->
			</div><!--/ container end -->
		</section>
		<!-- Faq page end -->

		<?php include "common/footer.php" ?>


	</div>
</body>
</html>
