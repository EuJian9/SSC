<?php require_once('common/function.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
    jQuery(function ($) {
        function check_values() {
            if ($("#username").val().length != 0 && $("#password").val().length != 0) {
                $("#button1").removeClass("hidden").animate({ left: '250px' });
                $("#lock1").addClass("hidden").animate({ left: '250px' });
            }
        }
    });
</script>

<style>

</style>
	<?php htmlheader(); ?>
	<title>Login</title>  
</head>
	<?php include "common/header.php" ?>


    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>


   <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                      	<form action="forum.php" method="post" role="form">
								<div class="contact-form">
                           <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               	<input class="form-control" name="name" id="name" placeholder="Username" type="text" required>
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                      	<input class="form-control" name="name" id="name" placeholder="Password" type="text" required>
                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

											<div class="col-sm-12 controls">
                                      <a id="button1" href="forum.php" class="btn btn-success">Login  </a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account!
                                        <a href="register.php" target="_blank">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
						</div>








         </div>
    </div>





	<?php include "common/footer.php" ?>

</body>
</html>
