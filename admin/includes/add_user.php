<?php 
if(isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    
//    $post_image=$_FILES['image']['name'];
//    $post_image_temp=$_FILES['image']['tmp_name'];
//    
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_role = $_POST['user_role'];
    $user_date = date('d-m-y');
//  $post_comment_count = 4;
    
// move_uploaded_file($post_image_temp,"../images/$post_image");
$query = "INSERT INTO users(username,user_firstname,user_lastname,user_email,user_password,user_role,user_date)";
$query .= "VALUES('{$username}','{$user_firstname}','{$user_lastname}','{$user_email}','{$user_password}','{$user_role}',now())";


$create_user_query = mysqli_query($connection,$query);
confirm($create_user_query);
echo "User Craeted" . " : " . "<a href='admin_users.php'>View User</a>";
}

?>
  
   

   
   <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <lable for="title">First Name</lable>
          <input type="text" class="form-control" name="user_firstname">
    </div>
    
    <div class="form-group">
        <lable for="title">Last Name</lable>
          <input type="text" class="form-control" name="user_lastname">
    </div>    
    
<!--    <div class="form-group">-->
<!--
<select name="post_category" id="">
    <?php
//$query="SELECT * FROM categories";                 
//$select_categorie = mysqli_query($connection,$query);
//while($row=mysqli_fetch_assoc($select_categorie)){
//$cat_id=$row['cat_id'];
//$cat_title=$row['cat_title']; 
//    echo "<option value='$cat_id'>{$cat_title}</option>";
//}
    ?>
-->
    
    
<!--
    
</select>
        

    </div>
-->
  <div class="form-group">
   <select name="user_role" id="">
       <option value="subscriber">Select Option</option>
       <option value="admin">Admin</option>
       <option value="subscriber">Subscriber</option>
   </select>
   </div> 
    
    
    <div class="form-group">
        <lable for="title">Username</lable>
          <input type="text" class="form-control" name="username">
    </div>
    
      <div class="form-group">
        <lable for="post_status">Email</lable>
          <input type="email" class="form-control" name="user_email">
      </div>
    
    
      <div class="form-group">
        <lable for="post_image">User Image</lable>
          <input type="file" name="image">
      </div>
    
      <div class="form-group">
        <lable for="post_tags">Password</lable>
          <input type="password" class="form-control" name="user_password">
      </div>
    
    
<!--
     <div class="form-group">
        <lable for="post_content">Post Content</lable>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
          </div>
-->
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add_user" Value="Add User">
    </div>
    
    
    
</form>