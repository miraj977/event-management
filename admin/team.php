<?php include "header.php";

$sel=mysqli_query($con,"SELECT * FROM team;");
$row=mysqli_fetch_assoc($sel);
extract($row);?>
<div class="container" style="margin:8% auto;width:900px;">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title text-center">Add team member</h3>
        </div>
        <div class="panel-body">
            
            <form method="POST" class="form-signin" action="functions/team.php">
                <input type="hidden" name="id" value="<?php echo $id;?>" ?>
                <label>Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="" value="<?php echo $username;?>" required><br>
                <label>Short Message</label>
                <textarea class="form-control" rows="8" name="message"></textarea><br>
                <input type="submit" class="btn btn-success pull-right" value="Save">
            </form>
        </div>
        
        

    </body>
    </html>