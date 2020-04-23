<?php include "header.php";?>
<!-- <div class="pull-right" style="margin-right:10%;">
   &nbsp;Filter by<span class="glyphicon glyphicon-filter"></span><br>
       <select class="form-control"  onchange="location = this.value;">
           <option value="home.php"><i>Category</i></option>
           <option value="home.php">&#9751 Home</option>
           <?php $select = mysqli_query($con,"SELECT * from category");

           while($rows=mysqli_fetch_assoc($select)){
            extract($rows);?>
            <option value="post.php?cid=<?php echo $cat_id;?>"><?php echo $category;?></option>
            <?php }?></select>
   </div> -->
   <div class="container" style="margin:8% auto;width:100%;padding: 0% 10%">

     <h2> Events</h2>
     <hr>           
     <a href="add-topic.php" class="pull-right btn btn-success">Add New</a><br/><br/>
     <div class="panel panel-primary">
        <div class="panel-heading">
                <h3 class="panel-title">List of Events</h3>
            </div> 
            <div class="panel-body">

             <table class="table table-stripped" width="100%">
                <th>Event Title</th>
                <th>Organizer</th>
                <th>Category</th>
                <th>Featured</th>
                <th>Date</th>
                <th>Venue</th>
                <th>Action</th>
                <?php
               
                $sql = "SELECT * FROM tblpost ORDER by post_Id  DESC";
                $run = mysqli_query($con,$sql);

                while($row=mysqli_fetch_array($run))
                {
                    $id = $row['post_Id'];
                    echo "<tr>";
                    echo "<td style='width:20%;'>".$row['title']."</td>";
                    echo "<td style='width:15%;'>".$row['organizer']."</td>";
                    // echo "<td style='width:25%;'>".wordwrap(substr($row['content'],0,100),50,"<br>\n")."..."."</td>";
                    echo "<td>".$row['cat_id']."</td>";
                    if($row['featured']=1){echo "<td style='width:5%;'>Yes</td>";}else{echo "<td style='width:5%;'>No</td>";};
                    echo "<td>".$row['date']."</td>";
                    echo "<td>".$row['venue']."</td>";
                    
               echo "<td>".
               "<a href='topic-details.php?post_Id=$id' class='btn btn-default'><span class=\"glyphicon glyphicon-tasks\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Details\" ></a>"." ".
               "<a href='edit-topic.php?post_Id=$id' class='btn btn-default'><span class=\"glyphicon glyphicon-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\"></span></a>"." ".
               "<a href='delete-topic.php?post_Id=$id' onclick=\"return confirm('Are you sure to delete the post?')\"class='btn btn-default'><span class=\"glyphicon glyphicon-remove-sign\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\"></a>"
               ."</td>";
               echo "</tr>";
           }


           ?>
       </table>
   </div>
</div>
</div>
<a onclick="topFunction()" id="myBtn" title="Go to top" style="display: block;">Back to top</a>
<script>

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }


    function topFunction() {
        document.body.scrollTop = 0; 
        document.documentElement.scrollTop = 0; 
    }
</script>

</body>
</html>