    <?php include"includes/db.php" ?>
     <?php include"includes/header.php" ?>
   
   
   
   
   
    <!-- Navigation -->
  <?php include"includes/navigation.php" ?> 

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                
                <?php
    
    if(isset($_GET['category'])){
        $the_cat_id=$_GET['category'];
                     
    }
    
    
    
    
    
    
 $query="SELECT * FROM posts WHERE post_category_id=$the_cat_id";                    
 $select_all_posts_query = mysqli_query($connection,$query);
                    
        while($row=mysqli_fetch_assoc($select_all_posts_query)){
            $post_id=$row['post_id'];
            $post_title=$row['post_title'];
            $post_author=$row['post_author'];
            $post_date=$row['post_date'];    
            $post_content=substr($row['post_content'],0,100);
            $post_image=$row['post_image'];
          ?>  
            
            <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
<h2>
<a href="post.php?p_id=<?php echo $post_id;?>"><?php echo "$post_title" ?><?php echo "$post_title" ?></a>
</h2>
<p class="lead">
    by <a href="index.php"><?php echo "$post_author" ?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span> <?php echo "$post_date" ?></p>
<hr>
<img class="img-responsive" src="images/<?php echo "$post_image" ?>" alt="">
<hr>
<p><?php echo "$post_content" ?></p>
<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

<hr>

            
     <?php   }   ?>     <!-- Blog Comments -->

<!-- Comments Form -->
<div class="well">
<h4>Leave a Comment:</h4>
<form role="form">
<div class="form-group">
<textarea class="form-control" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<hr>

  
                    
  
                  <?php include"includes/pager.php" ?>
            </div>
                  <?php include"includes/sidebar.php" ?>
            <!-- Blog Sidebar Widgets Column -->
          

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        
        
        <?php include"includes/footer.php" ?>
       