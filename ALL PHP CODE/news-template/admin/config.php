<!-- connaction in databash -->
<?php 
$server="localhost";
$name="root";
$password="";
$db='newtest';
$con=mysqli_connect($server,$name,$password,$db);
?>
<?php 
   if(isset($_POST['login'])){
      $logemail=$_POST['logemail'];
      $logpassword=$_POST['password'];
      $seletedemail="SELECT * FROM `testlogin` WHERE `useremial`='$logemail'";
      $query=mysqli_query($con,$seletedemail);
      $numrows=mysqli_num_rows($query);
      if($numrows){
         $datafatch=mysqli_fetch_assoc($query);
         $username=$datafatch['username'];
         $userpassword=$datafatch['userpassword'];
         $passverfiy=password_verify($logpassword,$userpassword);
         if($passverfiy){
            echo "sssss";
         }else{
            echo "ffffffffffff";
            echo"$logpassword=$userpassword";
         }
      }else{
         echo "not found";
      }
   }
?>