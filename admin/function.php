<?php

function confirm($result) {
    global $connection;
    if(!$result){
    die("Query Failed". mysqli_error($connection));
}
    return $result;
}


function insert(){
    global $connection;
    if(isset($_POST['submit'])) {
$cat_title=$_POST['cat_title'];
    
    if($cat_title == "" || empty($cat_title)){
        echo"This Field Should not be empty";
    }
else{
    
    $query="INSERT INTO categories(cat_title)";
    $query .="VALUES('{$cat_title}') ";
   $add_categorie = mysqli_query($connection,$query); 
   header("Location: admin_categories.php");
    if(!  $add_categorie){
        die("Query Failed".mysqli_error($connection));
      }
  }    
 
 }   
   
}

function delete(){
    global $connection;
    if(isset($_GET['delete'])){
    
    $the_cat_id = $_GET['delete'];
    
    $query="DELETE FROM categories WHERE cat_id= {$the_cat_id}";
    $edit_query=mysqli_query($connection,$query);
    header('Location:admin_categories.php');
    
}                           
                           
 
    
} 
function update(){
     global $connection;
    if(isset($_GET['edit'])){
        $cat_id=$_GET['edit'];
        
       include "includes/update_category.php"; 
    }   
}

function showcategory(){
    global $connection;
     $query="SELECT * FROM categories ";                    
$select_all_categories = mysqli_query($connection,$query);                
while($row=mysqli_fetch_assoc($select_all_categories)){
$cat_id=$row['cat_id'];
$cat_title=$row['cat_title'];

echo "<tr>";
echo "<th>{$cat_id}</th>";
echo "<th>{$cat_title}</th>";
echo "<th><a href='admin_categories.php?delete={$cat_id}'>Delete</a></th>";
echo "<th><a href='admin_categories.php?edit={$cat_id}'>Edit</a></th>";    
echo "</tr>";   
}         

}






?>