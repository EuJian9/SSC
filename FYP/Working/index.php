
	<?php include "Same/header.php" ?>



  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="navbar-brand" href="index.php"></a>
        </div>
      </div>
    </div>



    <div class="container">


      <a href="add_event.php" class="btn btn-default pull-right" style="margin-bottom: 20px;">Add Event</a>

      <div class="clearfix">
      </div>

      <div class="box">

        <div class="header"><h4>Calendar</h4></div>
        <div class="content">

            <div id="calendar"></div>

        </div>
    </div>



    <?php
		if(isset($_GET['page']))
		{
			header('location: view.php?page='.$_GET['page']);
			exit();
	   	}
   	?>

    </div> <!-- /container -->

	<?php include "Same/footer.php" ?>

  </body>
</html>
