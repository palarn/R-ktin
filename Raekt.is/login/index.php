<?php
    if(isset($_POST['submit'])) 
    {
       if($_POST['password'] == 'admin') 
       {    
            header ( 'Location: editstod.php ');
       }
       else 
       {
           echo "Wrong Password";
           exit ;  
       }
    }
    
 ?>
 <html>
 <form action="<?echo $PHP_SELF;?>" method ="POST">
  Please Enter the Password:
  </br>
 <input type= "password" name= "password" />
 <input type = "submit" name="submit" value = "Go!"  />

 </form>

