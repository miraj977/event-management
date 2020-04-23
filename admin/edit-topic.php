<?php include "header.php";?>

<div class="container" style="margin:8% auto;width:900px;">
 
 <h2> Topics Posted</h2>

 <hr>
 <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Topic Details</h3>

  </div> 
  <div class="panel-body">
    <?php 
    if(isset($_GET['post_Id'])){
     $id = $_GET['post_Id'];
     $sql = "SELECT * FROM tblpost WHERE post_Id='$id'";
     $run = mysqli_query($con,$sql);

     while($row=mysqli_fetch_array($run))
     {
      $id = $row['post_Id'];
      
      $title =  mysqli_real_escape_string($con,$row['title']);
      $content = $row['content'];
      $category= mysqli_real_escape_string($con,$row['cat_id']);
      $date =mysqli_real_escape_string($con,$row['date']);
      $time =mysqli_real_escape_string($con,$row['time']);
      $featured =mysqli_real_escape_string($con,$row['featured']);
      $organizer =$row['organizer'];
      $email =$row['email'];
      $phone =$row['phone'];
      $website =$row['website']; 
      $price =$row['price']; 
      $venue =$row['venue'];  
      $lon =$row['lon']; 
      $lat =$row['lat']; 
?>
      <form method="POST"  action="edit-topic.php?edit=<?php echo $id;?>" enctype="multipart/form-data">
    <input type="hidden" name="post_Id" value="<?php echo $id;?>">
     <label>Event Title</label>
     <input type="text" class="form-control" name="title"required value="<?php echo $title?>"><br>
     <label>Organizer Name</label>
     <input type="text" name="organizer" value="<?php echo $organizer?>" class="form-control" required><br>
     <div class="col-md-12" style="display:inline-flex;padding-left:0px">
      <label style="padding-top:6px;">Email</label>&nbsp;&nbsp;&nbsp;
      <input type="email" class="form-control" value="<?php echo $email?>" name="email" style="width:25%;">&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Phone</label>&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control"  value="<?php echo $phone?>" name="phone" style="width:25%;">&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Website</label>&nbsp;&nbsp;&nbsp;
      <input type="text" class="form-control" value="<?php echo $website?>" name="website" style="width:25%;">
      </div><br><br><br>
     <label>Content</label>
     <textarea name="content"class="form-control" rows="8" required><?php echo $content?></textarea><br>
      <div class="checkbox" style="padding-left:0px;">
      <label style="padding-left:0px;"><b>Featured</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php if($featured=1)
      {?>
      <input type="checkbox" checked name="featured" value="1"><br>
      <?php }else{?>
      <input type="checkbox" name="featured" value="1"><br>
      <?php }?></div>
      <br>
      <div class="col-md-12" style="display:inline-flex;padding-left:0px">
      <label style="padding-top:6px;">Category</label>&nbsp;
      <input type="text" value="<?php echo $category?>" placeholder="Music, Festival, Meetup,..." class="form-control" name="category" style="width:100%;">&nbsp;&nbsp;&nbsp;

      <label style="padding-top:6px;">Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $date?>" placeholder="dd/mm/yyyy" class="form-control" name="date" style="width:25%;">&nbsp;&nbsp;&nbsp;
      
      <label style="padding-top:6px;">Time</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $time?>" placeholder="12:00 am" class="form-control" name="time" style="width:25%;">
      </div><br><br><br>
      <div class="col-md-12" style="display:inline-flex;padding-left:0px">
      <label style="padding-top:6px;">Venue</label>&nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $venue?>" class="form-control" name="venue" style="width:25%;" required>&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Latitude</label>&nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $lat?>" placeholder="Optional" class="form-control" name="lat" style="width:25%;">&nbsp;&nbsp;&nbsp;
      <label style="padding-top:6px;">Longitude</label>&nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $lon?>" placeholder="Optional" class="form-control" name="lon" style="width:25%;">
      </div><br><br>
      <label style="padding-top:6px;">Price</label>&nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $price?>" placeholder="AUD" class="form-control" name="price" style="width:15%;"><br>
      <div id='uploadcontainer'>
         <input type='file' name='files[]' class='uploadfile' />&nbsp;<label>1920x1280 res</label><br>
      </div>
<!--       <a style="cursor:pointer;text-decoration:none;" id='extraUpload'>Add more</a>
 -->      <input type="submit" class="btn btn-success pull-right" value="Update Event">
    </form>
   <?php }
  }

  if(isset($_GET['edit'])){
      $id = $_GET['edit'];
      $title =  mysqli_real_escape_string($con,$_POST['title']);
      $content = $_POST['content'];
      $category= mysqli_real_escape_string($con,$_POST['category']);
      $date =mysqli_real_escape_string($con,$_POST['date']);
      $time =mysqli_real_escape_string($con,$_POST['time']);
      $featured =mysqli_real_escape_string($con,$_POST['featured']);
      $organizer =$_POST['organizer'];
      $email =$_POST['email'];
      $phone =$_POST['phone'];
      $website =$_POST['website']; 
      $price =$_POST['price']; 
      $venue =$_POST['venue'];  
      $lon =$_POST['lon']; 
      $lat =$_POST['lat']; 
      $sqli = "UPDATE `tblpost` SET title='$title', content='$content', cat_id='$category',organizer='$organizer', `date`='$date' , `time`='$time',phone='$phone',email='$email',website='$website',lat='$lat',lon='$lon',featured='$featured',venue='$venue',price='$price' WHERE `post_Id`='$id'";
                    //print_r($sqli);
    $runs=mysqli_query($con,$sqli);
    $errors = array();
   
        $extension = array("jpeg","jpg","png","gif");
         
        $bytes = 1024;
        $allowedKB = 100;
        $totalBytes = $allowedKB * $bytes;
        if(isset($_FILES["files"]))
        {  
         
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
        {   
            

            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
             if(!empty($file_name)){ 
            $uploadThisFile = true;
             
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
            if(!in_array(strtolower($ext),$extension))
            {
                array_push($errors, "File type is invalid. Name:- ".$file_name);
                $uploadThisFile = false;
            }               
             
            if($_FILES["files"]["size"][$key] < $totalBytes){
                array_push($errors, "File size must be less than 100KB. Name:- ".$file_name);
                $uploadThisFile = false;
            }
             
            if(file_exists("../assets/uploads/".$_FILES["files"]["name"][$key]))
            {
                array_push($errors, "File already exist. Name:- ". $file_name);
                $uploadThisFile = false;
            }
            if($uploadThisFile=true){
                $filename=basename($file_name,$ext);
                $newFileName=$filename.$ext;                
                move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../assets/uploads/".$newFileName);
                $filepath="../assets/uploads/"; 
                $up=mysqli_query($con,"UPDATE tblpost SET filename='$newFileName', filepath='$filepath' WHERE post_Id=$id;");
            }
        }}}
                    //exit();
    echo("<script>location.href = 'post.php';</script>");                                  
    
  }
  ?>
  
    
      
    </div>
  </div>
</body>
</html>