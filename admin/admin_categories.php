<?php include"function.php" ?>
   <?php include"includes/admin_header.php" ?>
    <div id="wrapper">

        <!-- Navigation -->
       <?php include"includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Welcome to admin
                            <small>Author name</small>
                        </h1>
     <!--category form -->               
<div class="col-xs-6">
<?php insert(); ?>



<form action="" method="post">
<div class="form-group">
<lable for="cat-title">Add Category </lable>                       
<input type="text" name="cat_title" class="form-control">
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" name="submit" value="Add Category">
</div>
 </form>
 
  
    
<?php update(); ?>
                   
                              
                                
                                  
  </div> <!--category form --> 
                       
                       <div class="col-xs-6">
<?php 

?>
<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Title</th>
                    </tr>
                </thead>
                <tbody>
       
<?php showcategory(); ?>

  </tbody>
 </table>     
          
<?php  delete();   ?>                            
                           
</div>
  
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include"includes/admin_footer.php" ?>