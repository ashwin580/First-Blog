<?php

  if(isset($_GET['u_id'])){
      
      $the_user_id=$_GET['u_id'];
  }


$query="SELECT * FROM users WHERE user_id=$the_user_id";                    
$select_user_by_id = mysqli_query($connection,$query);                
while($row=mysqli_fetch_assoc($select_user_by_id)){
    $user_id=$row['user_id'];
    $username=$row['username'];
    $user_firstname=$row['user_firstname']; 
    $user_lastname=$row['user_lastname'];
    $user_email=$row['user_email'];
//    $post_image=$row['post_image'];
    $user_password=$row['user_password'];
    $user_role=$row['user_role'];
    $user_date=$row['user_date'];

}
if(isset($_POST['update_user'])){
//    echo "hi";
    
    $user_firstname      = $_POST['user_firstname'];
    $user_lastname       = $_POST['user_lastname'];
    $user_role           = $_POST['user_role'];
    $username      = $_POST['username'];

    $user_email     = $_POST['user_email'];
    $user_password        = $_POST['user_password'];
    //    $user_email       = $_FILES['image']['name'];
//    $post_image_temp  = $_FILES['image']['tmp_name'];
//    move_uploaded_file($post_image_temp,"../images/$post_image");
//     if(empty($post_image)){
//        $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
//        $select_image=mysqli_query($connection,$query);
//        
//        while($row = mysqli_fetch_array($select_image)){
//            $post_image = $row['post_image'];
//        }
//    }

    
    $query = "UPDATE users SET ";
    $query .= "user_firstname='{$user_firstname}', ";
    $query .= "user_lastname='{$user_lastname}', ";
    $query .= "user_date = now(), ";
    $query .= "user_role='{$user_role}', ";
    $query .= "username='{$username}', ";
    $query .= "user_email='{$user_email}', ";
    $query .= "user_password='{$user_password}' ";
    $query .= "WHERE user_id={$the_user_id} ";
    
    $update_user_query=mysqli_query($connection,$query);
    confirm($update_user_query);
   
    
}
?> 

   
       <form action="" method="post" enctype="multipart/form-data">
    
       <div class="form-group">
        <lable for="title">First Name</lable>
          <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
    </div>
    
    <div class="form-group">
        <lable for="title">Last Name</lable>
          <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
    </div>    
    

  <div class="form-group">
   <select name="user_role" id="">
      <option value="subscriber"><?php echo $user_role; ?></option>
      
      <?php  
       if($user_role == 'admin'){
           
           echo "<option value='admin'>Admin</option>";
       }else{
           echo "<option value='subscriber'>Subscriber</option>";
       }
       
       
       ?>
      
      
       
      
   </select>
   </div> 
    
    
    <div class="form-group">
        <lable for="title">Username</lable>
          <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
    </div>
    
      <div class="form-group">
        <lable for="post_status">Email</lable>
          <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
      </div>
    
    
      <div class="form-group">
        <lable for="post_image">User Image</lable>
          <input type="file" name="image">
      </div>
    
      <div class="form-group">
        <lable for="post_tags">Password</lable>
          <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
      </div>
    
    
<!--
     <div class="form-group">
        <lable for="post_content">Post Content</lable>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
          </div>
-->
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_user" Value="Update User">
    </div>
</form>
