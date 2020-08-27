<DOCTYPE! HTML>
<html>
    <head>
        <link rel="stylesheet" href="css/udashboardc.css">
        <link rel="stylesheet" href="css/changepasswordc.css">
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
        <h1>>Change Password</h1>
        <div class="box">
           <form action="post">
               <span><h1></h1>
             <h2>Last Changed at :</h2><p>  2018-06-24 08:25:21</p></span>
             
             <div class="col1">
             <div class="txt"> <br>
                 <span>Current Password</span> <br><br><br><br><br>
             <span>New Password</span><br><br><br><br><br>
            <span>Conform Password</span></div>
             <br>
  <input type="password" class="input" placeholder="Enter your current Password"><br><br><br><br><br>
            <input type="password" class="input" placeholder="Enter your New Password"><br><br><br><br><br>
        
             <input type="password" class="input" placeholder="Enter your New Password Again">
             <button>Submit</button>

             </div>
           
             </form> 
        </div>
        </div>
        <footer><h1>Complaint Management System</h1></footer>       
    </body>
    
    
    
    
    
</html>