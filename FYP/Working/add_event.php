
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
        <div class="header"><h4>Add Event</h4></div>
        <div class="content pad">

            <form id="add_event">

                <label>Title : </label>
                <input type="text" class="validate[required] form-control" name="title" placeholder="Event Title" id="title">
                <label>Description : </label>
                <textarea class="form-control" name="description" id="description" placeholder="Event Description"></textarea>
                <div class="pull-left mr-10">
                <label>Venue : </label>
                <textarea class="form-control" name="venue" id="venue" placeholder="Venue Description"></textarea>
                  <div class="pull-left mr-10">
                <label>Start Date : </label>
                <input type="text" name="start_date" class="validate[required] form-control input-sm" id="datepicker">
                </div>
                <div class="pull-left">
                <label>Start Time : </label>
                <input type="text" class="form-control input-sm" name="start_time" placeholder="HH:MM:SS" id="tp1">
                </div>
                <div class="clearfix"></div>
                <div class="pull-left mr-10">
                <label>End Date:</label>
                <input type="text" class="form-control input-sm" name="end_date" id="datepicker2">
                </div>
                <div class="pull-left">
                <label>End Time:</label>
                <input type="text" class="form-control input-sm" name="end_time" placeholder="HH:MM:SS" id="tp2">
                </div>
                <div class="clearfix"></div>
                <label>Event Color:</label>
                <input type="text" class="form-control input-sm" name="color" id="cp">
                <label>Display Time:</label>
                <select name="allDay" class="form-control">
                    <option value="true" selected>Yes</option>
                    <option value="false">No</option>
                </select>
                <label>Url:</label>
                <input type="text" class="form-control" name="url" id="url" placeholder="http://www.domain.com">
                <p class="help-block">Hint: If this event does not have url please leave blank</p>

                <button type="submit" onclick="calendar.save()" class="btn btn-primary pull-right">Add Event</button>

            </form>

        </div>
    </div>

    </div> <!-- /container -->

	<?php include "Same/footer.php" ?>

  </body>
</html>
