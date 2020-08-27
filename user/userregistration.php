<?php 
include('includes/connection.php');
$n=0;
$exist=0;
?>
<DOCTYPE! HTML>
<html>
    <?php
        if(isset($_POST['submit']))
        {
           // echo '<script type="text/javascript" >alert("button") </script>';
            $fullname=$_POST['fullname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $contactno=$_POST['contactno'];
            $houseno=$_POST['houseno'];
            $query="select *from users where useremail='$email'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result))
            {
                $exist=1;
                
            }else {  $query="insert into users(fullname,useremail,contactno,password,houseno) values('$fullname','$email',' $password',' $contactno','$houseno')";
                    mysqli_query($con,$query);
                   $n=1;


} 
        }
        
        
        ?>
   
    <head>
        <link rel="stylesheet" href="css/userR.css">
    <title>User Registration</title>
    </head>
    <body>
      
    <form action="userregistration.php" method="post" >
       <div class="signin">
       <div class="top">
           USER REGISTRATION
       </div>
           
           <p style="padding-left:10px; margin-top:-5px;margin-bottom:-5px; color: green">
           
           <?php 
               if($n){
    echo "Registration successfull. Now You can login !";}
    ?>
           
    </p>
           
    <center><input type="text" placeholder="Full Name"  name="fullname" required="required" autofocus></center>
    <center><input type="email" placeholder="User ID" value="<?php echo $email;?>" name="email" required="required"></center>
     
           <p style="padding-left:22px; margin-top:0px;margin-bottom:-5px; color: red">
           
           <?php 
               if($exist){
    echo "Email Already Exist";}
               ?></p>
    <center><input type="Password" placeholder="Pasword" name="password" required="required"></center>
    <center><input type="text" placeholder="Contact no" maxlength="12" name="contactno" required="required"></center>
    <center><input type="text" placeholder="House No" name="houseno" required="required"></center>

      <center> <button type="submit" name="submit" id="submit">Register</button></center>
      <hr>
      <center><p>Already Registered</p></center>
      <center> <a href="userlogin.php" class="forgot_link"><span><p>
     Sign in</p></span></a></center>
       </div>
        </form>
       
     </body>
    
    
    
    
    
</html>