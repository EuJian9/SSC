<?php

// Include the calendar class
include('includes/loader.php');

// Retrieve Current Page Data
$info = $calendar->retrieve($_GET['page']);

?>

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

      <a href="index.php" class="btn btn-default pull-right" style="margin-bottom: 20px;">View Events</a>

      <div class="clearfix"></div>

      <div class="box">
        <div class="header"><h4>Edit Event</h4></div>
        <div class="content pad">

            <form id="edit_event">

                <label>Title:</label>
                <input type="text" class="validate[required] form-control" name="title_update" placeholder="Event Title" value="<?php echo $info['title']; ?>">
                <label>Description:</label>
                <textarea class="form-control" name="description_update" placeholder="Event Description"><?php echo $info['description']; ?></textarea>
                <label>Venue : </label>
                <textarea class="form-control"  name="description_venue" placeholder="Venue Description"><?php echo $info['venue'];?></textarea>



    			<br /><br />
                <button type="submit" onclick="calendar.update(<?php echo $info['id']; ?>)" class="btn btn-primary">Save Changes</button>

            </form>

        </div>
    </div>

    </div> <!-- /container -->

	<?php include "Same/footer.php" ?>
  </body>
</html>
