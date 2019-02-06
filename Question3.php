
<!--Assignment-3---> 
<html>
  <body>
<?php
    
      function confirm($result){
    
        global $connection;
    
        if(!$result){
        
            die("Query Failed".mysqli_error($connection));
        }
      }
      
?>      
<?php include "includes/db.php" ?>
   
            
            
            
           
            
            
<?php 

            if(isset($_POST['submit_click'])) {
   
            $id_en             = $_POST['id'];
            $name_en           = base64_encode($_POST['name']);
            $email_en          = base64_encode($_POST['email']);
            $mobile            = base64_encode($_POST['mobile']);
         
            $query = "INSERT INTO form1(id,name,email,mobile) ";
            
            $query .= "VALUES({$id_en},'{$name_en}','{$email_en}','{$mobile}') ";
         
            $create_post_query = mysqli_query($connection, $query);
            confirm($create_post_query);     
            //confirm($create_post_query);     
            
     }
    



?>
            
<form action="" method="post" enctype="multipart/form-data">            
            
        <div class="form-group">
         <label for="title">ID</label>
          <input type="text" class="form-control" name="id">
         </div>
         
         <div class="form-group">
         <label for="title">Name</label>
          <input type="text" class="form-control" name="name">
         </div>
         
         <div class="form-group">
         <label for="title">Email</label>
          <input type="text" class="form-control" name="email">
         </div>
         
         <div class="form-group">
         <label for="title">Mobile</label>
          <input type="text" class="form-control" name="mobile">
         </div>
         
         <div class="form-group">
          <input class="btn btn-primary" type="submit" name="submit_click" value="Submit">
         </div>
        
</form> 
  
            <?php 
                
                $query =  "SELECT * FROM form1";
                
                $select_all_categories_query = mysqli_query($connection,$query);
                    
                while($row = mysqli_fetch_assoc($select_all_categories_query)){
                        $id = $row['id'];
                        $name = base64_decode($row['name']);
                        $email = base64_decode($row['email']);
                        $mobile  = base64_decode($row['mobile']);
                
            ?>
                <?php echo $id; ?>
                <?php echo $name; ?>
                <?php echo $email; ?>
                <?php echo $mobile; ?>
                
                
                
            <?php } ?>
                    
   
  
    </body>

</html>
