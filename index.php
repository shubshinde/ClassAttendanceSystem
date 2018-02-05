<html>  
  <head>
    
    <title>The Attendance App</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="assets/css/main.css" />

    <title>The Attendence App</title>   
  </head>
    
<body>

  
<style>

/*** Extra Styling ***/

body
{
       margin: 0 auto;
       background-repeat: no-repeat;
       background-size: 100% 930px;
       width: 695px;
       cursor: pointer;
       font-family: monospace;
}



h2 {
  padding-left: 5px; 
  margin-left: 10px;      
  
}


a {
color: #222;
}


/* Main Page Styling */
    

    h1
 {
      color: #222;
       margin-top: 5px;
      text-align: center;
      text-decoration: none;
}
   
    .present
  {
       width: 150px;
       height: 60px;
       color:#fff;
       text-align: center;       
       background-color:#159b2f;
       border: none;       
}  
    .absent
    {
       width: 150px;
       height: 60px;
       color:#fff;
       text-align: center;       
       background-color:rgb(208, 39, 39);
            
}  
    .p
      {
        margin: 5px;
      }
    
    .student
    {
        float: center;
    }
    

.status
{
  margin-left: 270px;
  margin-top: -70px;
}
    
  .roll
    {
        margin-right: 200px;
    }
  .name
    {
      margin-left: -380px;
    }

  .logo-img
    {
      width: 130px;
      height: 130px;
    }
    
</style> 
    


<!--Slider -->  

   <nav id="nav">
           
           <center>
            <img src="logo.png" class="logo-img"> 
            <br><br><marquee><font  size="7px"> . . . . . . . . </font></marquee><br>
          </center>
          <br><br>

<!--Developer Table-->
   
       <font  size="7px"> <th>Developer : <font  size="6px">Vaibhav Dagale
</font></font><br><br>
   
       <font  size="7px"> Info :<br> <font  size="6px">Welcome to The Attendance App. This app is Developed for Parents to see Presenty of their Child. Many students Bunks College , so it helps Parents to Monitor their Childs College Activity.  
</font>  </font><br><br>
       
       <font  size="7px"> Future Scope :<br> <font  size="6px">These are the future features : <br>1. System of Sending Text Message to Parents of Absent Student.<br>2. App can Store Presenty Record Day by Day , hence it will be easy to check presenty of particular day.<br>3. Calculating Total Presenty Percentage(%) of a student. It Will help both Teacher and Parents to check if presenty is above 75% or not.
</font>  </font><br><br>
       
       <font  size="7px"> Platform : </font><font  size="6px"> all </font> <font  size="7px" color="#11c935"><span class="fa fa-android"></span></font><font  size="6px"> Devices</font>
              
        </font><br><br><br><br><br><br>
    
    <font  size="6px">Date : 2/2/2018</font><br><br>
     
    <center><font  size="6px">D.O.C.S &copy; Copy Right</font> </center>
    </nav>
   
   
    <!--Header-->

  <a id="test" href="#navPanel" class="navPanelToggle">
 
<center>
  <div style="padding:15px; color:#fff; background:#211e1e;"> 

<font class="bars" size="100px"><span class="fa fa-bars"></span></font></a>
      <img src="logo.png" class="logo-img"><br><br>
    <font size="10px" face="monospace" color="#fff"><b> The Attendence App</b>
      </font>
</center><br><br>
    
        
    
      <!--PHP Code-->
    
              <center>
<br><br>

<?php 

       $host = 'sql205.rf.gd';
       $user = 'rfgd_19685247'; 
       $pass = 'bitchletmecode'; 
       
       $conn = mysql_connect($host, $user, $pass);
    
if(! $conn ) {
                die('<h1>Technical Problem.. Contact Admin At amazingshub@gmail.com</h1> ' . 

mysql_error()); }
    

   $sql = 'SELECT * FROM attendence ';
   
   mysql_select_db('rfgd_19685247_website');

   $retval = mysql_query( $sql, $conn ); 
    
   $query = 'SELECT present FROM attendence';

   mysql_select_db('rfgd_19685247_website');
   
   $try = mysql_query( $query, $conn ); 

if(! $retval ) { die('Could not get data: ' . mysql_error()); } //for error

 

while($row = mysql_fetch_assoc($retval)) 
{    
    $status=$row['present'];
    
    $zero=0;
     $one=1;
    
    $present="<div class='present'><p class='p'><br><b><font 

size='5px'>Present</font></p></b></div></td></tr></table>";
    
    $absent="<div class='absent'><p class='p'><br><b><font 

size='5px'>Absent</font></p></b></div></td></tr></table>";
    
    
    if($status==1) 
      { 
        $status=$one=$present;
      }
    else 
      {
        $status=$zero=$absent;
      }
    
    echo "<table class='status-col' cellspacing='1'><tr><td><font family='Candara'><h1 class='roll'>"." 
          {$row['roll']} "."</h1></td><td><h1 class='name'> {$row['name']} "."</h1>" . "<div 

class='status'>". $status."
          </h1></font></div>" ."</td></tr></table><br><hr><br>";  
    
}  

    mysql_close($conn); 

?> 
  
  </center>


<!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>


  </body> 
</html> 

