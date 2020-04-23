<?php include "header.php";

$sel=mysqli_query($con,"SELECT * FROM about where id=1;");
$row=mysqli_fetch_assoc($sel);
extract($row);?>
<div class="container" style="margin:8% auto;width:900px;">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title text-center">Edit About us</h3>
        </div>
        <div class="panel-body">
            
            <form method="POST" class="form-signin" action="about.php?update">
            <label>About Us 1</label>
            <textarea class="form-control" rows="5" name="about1"><?php echo $about1;?></textarea><br>
            <label>About Us 2</label>
            <textarea class="form-control" rows="5"  name="about2"><?php echo $about2;?></textarea><br>
            <label>About Us 3</label>
            <textarea class="form-control" rows="5"  name="about3"><?php echo $about3;?></textarea><br>
            <label>Why us?</label>
            <textarea class="form-control" rows="5"  name="whyus"><?php echo $about3;?></textarea><br>
            <label>Meet our Team</label>
            <textarea class="form-control" rows="5"  name="meet"><?php echo $about3;?></textarea><br>
                
            <input type="submit" class="btn btn-success pull-right" value="Save">
            </form>
        </div>
        <?php 
        if(isset($_GET['update']))
        {
        $a1=mysqli_real_escape_string($con,$_POST['about1']);
        $a2=mysqli_real_escape_string($con,$_POST['about2']);
        $a3=mysqli_real_escape_string($con,$_POST['about3']);
        $why=mysqli_real_escape_string($con,$_POST['whyus']);
        $meet=mysqli_real_escape_string($con,$_POST['meet']);
        $sql=mysqli_query($con,"UPDATE about SET about1='$a1',about2='$a2',about3='$a3',whyus='$why',meet='$meet' WHERE id=1;");
        echo "<script>location.href = 'about.php';</script>";
        }
        ?>       

    </body>
    </html>