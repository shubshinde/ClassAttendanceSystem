<!-- - - - - - - - - - - - - - - - - - - - - - - - - -

  App Name   :  The Attendance App

  Developer  :  Shinde Shubham Dilip

  Class        :   FYBCS

  Instructor :    Mr. Pansare S.Y 

  College    :   Sangamner College, Sangamner.

  App Info   :

                - The Idea behind App is to Help
                  Parents to See Daily Attendence Of
                  their Childreens and Moniter Child 
                  Activity .

               - Presenty is Updated Daily and 
                 parents can Just Open the App and
                 see is their child present
                 in College or not .

               - Available for All Android  Mobiles  
             
               - Comming Soon on Google PlayStore

 - - - - - - - - - - - - - - - - - - - - - - - - - -->


<html>  
  <head>
      <title>Student Attendance App</title>   
  </head>
    
<body>
        
<style>

/*** Extra Styling ***/

body
{
       margin: 0 auto;
       background-repeat: no-repeat;
       background-size: 100% 930px;
       width: 920px;
}

.container
 {
       width: 670px;
       height: 570px;
       text-align: center;
       background-color: rgba(52, 73, 94, 1.2);  
       border-radius: 4px;
       margin: 0 auto; 
       margin-top:200px;  
       padding:10px;    
}

h2 {
      padding-left: 5px; 
      margin-left: 10px;      
  
}


.a {
color: #fff;
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
      margin-left: 300px;
      margin-top: -70px;
}
    
  .roll
    {
        margin-right: 270px;
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


  <!--PHP Start's-->     
  
<center>

<?php 

       $host = 'sql205.rf.gd';
       $user = 'rfgd_19685247'; 
       $pass = 'bitchletmecode'; 
       
       $conn = mysql_connect($host, $user, $pass);
    
if(! $conn ) {
                die('<h1>Technical Problem.. Contact Admin At amazingshub@gmail.com</h1> ' . mysql_error()); }
    
    
    $header= '<div style="padding:15px; color:#fff; background:#211e1e;"> 

      <center>
              <img src="logo.png" class="logo-img"><br><br>
              <font size="10px" color="#fff"><b> Student Attendance App</b></font>
        
      </center>
              </div><br><br><br><br>';
    
echo $header;
    

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
    
    $present="<div class='present'><p class='p'><br><b><font size='5px'>Present</font></p></b></div></td></tr></table>";
    
    $absent="<div class='absent'><p class='p'><br><b><font size='5px'>Absent</font></p></b></div></td></tr></table>";
    
    
    if($status==1) 
      { 
        $status=$one=$present;
      }
    else 
      {
        $status=$zero=$absent;
      }
    
    echo "<table class='status-col' cellspacing='1'><tr><td><font family='Candara'><h1 class='roll'>"." 
          {$row['roll']} "."</h1></td><td><h1 class='name'> {$row['name']} "."</h1>" . "<div class='status'>". $status."
          </h1></font></div>" ."</td></tr></table><br><hr><br>";  
    
}  

    mysql_close($conn); 

?> 
  
  </center>

</body> 
</html> 

<!-- - - - - - - - - - - - - - - - - - - - - - - - - 

    I Dont Develope To Just Invent Something ,
    I Develope To Make Life More Easier  

                    ^_^
- - - - - - - - - - - - - - - - - - - - - - - - - -->