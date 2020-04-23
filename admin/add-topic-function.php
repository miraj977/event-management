<?php
session_start();
include "../includes/db.php";
$title =  mysqli_real_escape_string($con,$_POST['title']);
$content = mysqli_real_escape_string($con,$_POST['content']);
$organizer = mysqli_real_escape_string($con,$_POST['organizer']);
$venue = mysqli_real_escape_string($con,ucfirst($_POST['venue']));
if(isset($_POST['date'])){$date=$_POST['date'];}
if(isset($_POST['time'])){$time=$_POST['time'];}
if(isset($_POST['phone'])){$phone=$_POST['phone'];}
if(isset($_POST['email'])){$email=strtolower($_POST['email']);}
if(isset($_POST['website'])){$website=$_POST['website'];}
if(isset($_POST['lat'])){$lat=$_POST['lat'];}
if(isset($_POST['lon'])){$lon=$_POST['lon'];}
if(isset($_POST['featured'])){$featured=$_POST['featured'];}else{$featured=0;}
if(isset($_POST['price'])){$price=$_POST['price'];}
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
            }
        }}

//print_r($_POST);
$cat=mysqli_real_escape_string($con,($_POST['category']));
$sql = "INSERT INTO tblpost (title, content, cat_id,organizer, `date` , `time`,phone,email,website,lat,lon,featured,venue,price,filename,filepath) VALUES ('$title','$content','$cat','$organizer','$date','$time','$phone','$email','$website','$lat','$lon','$featured','$venue','$price','$newFileName','$filepath')";
//print_r($sql);print_r($_FILES['files']);exit();
$res = mysqli_query($con,$sql);
echo("<script>location.href = 'post.php';</script>");
?>