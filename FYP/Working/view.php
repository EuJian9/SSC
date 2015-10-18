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

      <a href="index.php" class="btn btn-default pull-right" style="margin-bottom: 20px;">Back to Events</a>

      <div class="clearfix"></div>

      <div class="box">

        <div class="header"><h4>Event</h4></div>

        <div class="content">

            <table class="table table-bordered m0 b0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Venue</th>
                  <th>Start Date</th>
                  <th>End Date</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $info['id']; ?></td>
                  <td><?php echo $info['title']; ?></td>
                  <td><?php echo $info['description']; ?></td>
                  <td><?php echo $info['venue']; ?></td>
                  <td><?php echo date('d/m/Y H:i', strtotime($info['start'])); ?></td>
                  <td><?php echo date('d/m/Y H:i', strtotime($info['end'])); ?></td>

                </tr>
              </tbody>
            </table>

        </div>

    </div>

    <button type="submit" onclick="calendar.remove(<?php echo $info['id']; ?>)" class="btn btn-danger pull-right">Delete This Event</button>
    <a href="edit_event.php?page=<?php echo $info['id']; ?>" class="btn btn-info pull-right mr-10">Edit This Event</a>

    <div class="clearfix"></div>

    </div> <!-- /container -->

    	<?php include "Same/footer.php" ?>
  </body>
</html>
