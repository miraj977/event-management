<?php include "header.php";?>

<div class="container" style="margin:8% auto;width:900px;">

 <h2> New Event</h2>

 <hr>
 <div class="panel panel-success">
  <div class="panel-heading">
  <h3 class="panel-title">Add New Event</h3>

  </div> 
  <div class="panel-body">
   <form method="POST" action="add-topic-function.php" enctype="multipart/form-data">
     <?php $cat=mysqli_query($con,"SELECT * FROM category;");?>
     <label>Event Title</label>
     <input type="text" class="form-control" name="title"required><br>
     <label>Organizer Name</label>
     <input type="text" name="organizer" class="form-control" required><br>
     <div class="col-md-12" style="display:inline-flex;padding-left:0px">
      <label style="padding-top:6px;">Email</label>&nbsp;&nbsp;&nbsp;
      <input type="email" class="form-control" name="email" style="width:25%;">&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Phone</label>&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="phone" style="width:25%;">&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Website</label>&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="website" style="width:25%;">
      </div><br><br><br>
     <label>Content</label>
     <textarea name="content"class="form-control" rows="8" required></textarea><br>
      <div class="checkbox" style="padding-left:0px;">
      <label style="padding-left:0px;"><b>Featured</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="featured" value="1"><br></div>
      <br>
      <div class="col-md-12" style="display:inline-flex;padding-left:0px">
      <label style="padding-top:6px;">Category</label>&nbsp;
      <input type="text" placeholder="Music, Festival, Meetup,..." class="form-control" name="category" style="width:100%;">&nbsp;&nbsp;&nbsp;

      <label style="padding-top:6px;">Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" placeholder="dd/mm/yyyy" class="form-control" name="date" style="width:25%;">&nbsp;&nbsp;&nbsp;
      
      <label style="padding-top:6px;">Time</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" placeholder="12:00 am" class="form-control" name="time" style="width:25%;">
      </div><br><br><br>
      <div class="col-md-12" style="display:inline-flex;padding-left:0px">
      <label style="padding-top:6px;">Venue</label>&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" name="venue" style="width:25%;" required>&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Latitude</label>&nbsp;&nbsp;&nbsp;
      <input type="text" placeholder="Optional" class="form-control" name="lat" style="width:25%;">&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Longitude</label>&nbsp;&nbsp;&nbsp;
      <input type="text" placeholder="Optional" class="form-control" name="lon" style="width:25%;">
      </div><br><br>
      <label style="padding-top:6px;">Price</label>&nbsp;&nbsp;&nbsp;
      <input type="text" placeholder="AUD" class="form-control" name="price" style="width:15%;"><br>
      <div id='uploadcontainer'>
         <input type='file' name='files[]' class='uploadfile' />&nbsp;<label>1920x1280 res</label><br>
      </div>
<!--       <a style="cursor:pointer;text-decoration:none;" id='extraUpload'>Add more</a>
 -->      <input type="submit" class="btn btn-success pull-right" value="Add Event">
    </form>
  </div>
</div>
<script type='text/javascript'>
  $('#extraUpload').click(function(){
      $('.uploadfile:last').clone().appendTo('#uploadcontainer');
  });
</script>
</body>
</html>
