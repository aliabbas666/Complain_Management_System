<DOCTYPE! HTML>
<html>
    <head>
        <link rel="stylesheet" href="css/udashboardc.css">
        <link rel="stylesheet" href="css/complainnow.css">
<title>Complaint Management System</title>
    </head>
    <body>
       <nav>
             <h1> Complaint Management System</h1> <button>Logout</button>
         </nav>
        <div class="sidebar">
          <center><img src="" alt=""></center>
          <h1>User Name</h1>
           <ul>
        
       
          <a href="udashboard.php">  <li>Dashboard</li></a>
            <a href="notification.php">  <li>Notification</li></a>
           <a href="#">  <li>Account Setting <ul>
              <a href="profile.php"><li>Profile</li></a> 
              <a href="changepassword.php"> <li>Change Password</li></a>
           </ul></li></a>
           <a href="complainnow.php">  <li>Complain Now</li></a>
           <a href="complainthistory.php">  <li>Complaint History</li></a>
        </ul></div><div class="sidecontainer">
        <h1>>Register Complaint</h1>
        <div class="box">
           <form action="post">
               
             <div class="col1">
             <div class="txt"> <br>
            <br> <span>
Nature of Complaint</span> <br><br><br><br><br>
             <span>Complaint Details</span> <br> <span>(max 2000 words)</span> <br><br><br><br><br><br><br><br>
            <span>Complaint Related</span> <br>
          <center>  <span> Doc(if any)</span></center>
            </div>
             <br><br>
           <input type="text" class="input"><br><br><br><br><br>
            <textarea name="" cols="30" rows="10"></textarea><br><br><br> <br> <br> <br>
        <br><br><br>
             <input type="file" class="input">
             <button>Submit</button>

             </div>
           
             </form> 
        </div>
        </div>
        <footer><h1>Complaint Management System</h1></footer>       
    </body>
    
    
    
    
    
</html>