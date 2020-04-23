<?php include "header.php";?>

<div class="container" style="margin:8% auto;width:900px;">

 <h2> New Banner</h2>

 <hr>
 <div class="panel panel-success">
  <div class="panel-heading">
  <h3 class="panel-title">Add New Banner</h3>

  </div> 
  <div class="panel-body">
  <?php $sql=mysqli_query($con,"SELECT * FROM banner;");
      if(mysqli_num_rows($sql)!=0)
      {
        $b=mysqli_fetch_assoc($sql);
        extract($b);
        echo "<img src='../".$filepath.$filename."' class='img-responsive'>"."<br>";
      }
    ?>
  <form method="POST" action="banner.php" enctype="multipart/form-data">
      <div id='uploadcontainer'>
         <input type='file' name='files[]' class='uploadfile' />&nbsp;<label>1920x1280 res</label><br>
      </div>
<!--       <a style="cursor:pointer;text-decoration:none;" id='extraUpload'>Add more</a>
 -->      <input type="submit" class="btn btn-success pull-right" value="Add Banner">
    </form>
    
  </div>
</div>
<?php
if(isset($_GET['error']))
{
  echo "<script>alert ('Please choose a file to upload.');</script>";
}
$errors = array();
         
        $extension = array("jpeg","jpg","png","gif");
         
        $bytes = 1024;
        $allowedKB = 100;
        $totalBytes = $allowedKB * $bytes;
        if(isset($_FILES["files"]))
        {  
         
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
        {
            $uploadThisFile = true;
             
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
             
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
             
            if(file_exists("../assets/banner/".$_FILES["files"]["name"][$key]))
            {
                array_push($errors, "File already exist. Name:- ". $file_name);
                $uploadThisFile = false;
            }
            if($uploadThisFile=true){
                $filename=basename($file_name,$ext);                
                $newFileName=$filename.$ext; 
                if(!empty($newFileName)){               
                move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../assets/banner/".$newFileName);
                $filepath="assets/banner/"; 
                $sqsl=mysqli_query($con,"DELETE * FROM banner;");
                $sql=mysqli_query($con,"INSERT INTO banner (filename,filepath) VALUES ('$newFileName','$filepath');");
                echo "<script>location.href = 'banner.php';</script>";

                }
                else{echo "<script>location.href = 'banner.php?error';</script>";}
            }
        }}?>
<script type='text/javascript'>
  $('#extraUpload').click(function(){
      $('.uploadfile:last').clone().appendTo('#uploadcontainer');
  });
</script>
</body>
</html>
