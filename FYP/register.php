<?php require_once('common/function.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<script>
function registerform(){


	var fullnameExp = /^[a-zA-Z ]+$/;
;

	var fullname= document.getElementById('fullname');


	if(fullname.value.match(fullnameExp)){
}else{
        document.getElementById("errorname").innerHTML="[Please type in alphabets only!]";
        isValid = false;
    }


</script>
<style>

.centered-form
{
    margin-top: 120px;
    margin-bottom: 120px;
}


</style>
	<?php htmlheader(); ?>

</head>
	<?php include "common/header.php" ?>


 <div class="container" id="container1">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Registration</h3>
                    </div>
                    <div class="panel-body">
                        	<form action="registerphp.php" method="post" role="form">
                            <div class="form-group">
                               	<input class="form-control" name="name" id="name"  placeholder="Name" type="text" required>
                            </div>

								<div class="form-group">
                                	<input class="form-control" name="email" id="email"  placeholder="Email Address" type="text" required>
                            </div>

									 <div class="form-group">
                                	<input class="form-control" name="name" id="ic"  placeholder="Identification Number" type="text" required>
                            </div>
									  <div class="form-group">
                                 	<input class="form-control" name="name"  id="hn" placeholder="Programme" type="text" required>
                            </div>

                            <div class="form-group">
                                	<input class="form-control" name="name" id="pn"  placeholder="Phone Number" type="text" required>
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                       	<input class="form-control" name="name" id="pwd" placeholder="Password" type="text" required>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="Register" class="btn btn-info btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






		<?php include "common/footer.php" ?>

</body>
</html>
