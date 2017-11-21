<table class="table table-bordered table-hover">
  <thead>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>Role</th>
        <th>Date</th>
       
    </tr>    
  </thead>
  <tbody>
<?php
$query="SELECT * FROM users ";                    
$select_all_users = mysqli_query($connection,$query);                
while($row=mysqli_fetch_assoc($select_all_users)){
    $user_id=$row['user_id'];
    $username=$row['username'];
    $user_firstname=$row['user_firstname']; 
    $user_lastname=$row['user_lastname'];
    $user_email=$row['user_email'];
    $user_image=$row['user_image'];
    $user_role=$row['user_role'];
    $user_date=$row['user_date'];
    
    echo "<tr>";
    echo "<td>{$user_id}</td>";
    echo "<td>{$username}</td>";
    echo "<td>{$user_firstname}</td>";
    echo "<td>{$user_lastname}</td>";
    echo "<td>{$user_email}</td>";
    echo "<td><img width=100 src='../images/$post_image'></td>";
    echo "<td>{$user_role}</td>";
    echo "<td>{$user_date}</td>";
    echo "<td><a href='admin_users.php?change_to_admin={$user_id}'>Admin</a></td>";
    echo "<td><a href='admin_users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
    echo "<td><a href='admin_users.php?source=edit_user&u_id={$user_id}'>Edit</a></td>";
    echo "<td><a href='admin_users.php?delete={$user_id}'>Delete</a></td>";

    echo "</tr>";
}

?>
    
    <?php 
      
      
          if(isset($_GET['delete'])){
          $the_user_id = $_GET['delete'];
          
          $query="DELETE FROM users WHERE user_id = {$the_user_id}";
          $delete_user = mysqli_query($connection,$query);
          header("Location: admin_users.php");
//          if(!$$delete_post){
//          die("Query Failed".mysqli_error($connection));
      
      
      }
      
      if(isset($_GET['change_to_admin'])){
          $the_user_id = $_GET['change_to_admin'];
          
          $query="UPDATE users SET user_role='Admin' WHERE user_id = {$the_user_id}";
          $change_to_admin = mysqli_query($connection,$query);
          header("Location: admin_users.php");
    }
         if(isset($_GET['change_to_sub'])){
          $the_user_id = $_GET['change_to_sub'];
          
          $query="UPDATE users SET user_role='Subscriber' WHERE user_id = {$the_user_id}";
          $change_to_sub = mysqli_query($connection,$query);
          header("Location: admin_users.php");
    }
      
      
      
      
      
      ?>
  </tbody>
</table>