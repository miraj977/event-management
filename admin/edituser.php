<?php include "header.php";
$uid=$_GET['uid'];

$sel=mysqli_query($con,"SELECT * FROM tblaccount where uid=$uid;");
$row=mysqli_fetch_assoc($sel);
extract($row);?>
<div class="container" style="margin:10% auto;width:400px;">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title text-center">Edit user</h3>
        </div>
        <div class="panel-body">
            
            <form method="POST" class="form-signin" action="functions/crud.php">
                <input type="hidden" name="uid" value="<?php echo $uid;?>" ?>
                <input type="text" class="form-control" name="uname" placeholder="Username" value="<?php echo $username;?>" required>
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email;?>" required>
                <input type="submit" class="btn btn-success" value="Save" style="width:100%;">
            </form>
        </div>
        
        

    </body>
    </html>