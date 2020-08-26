<?php
  $no=$_GET['no'];
   if( isset($_GET["no"]) ) {
      echo "Phone no :". $_GET['no']. "<br />";
      
      for ($i=1; $i <= $_GET['count'] ; $i++) { 
         $curl = curl_init();
         curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => '212688182899',
    CURLOPT_USERAGENT => 'Test request'));
    $resp = curl_exec($curl);
    curl_close($curl); 
      }
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "sms.php" method = "GET">
         Phone no: <input type = "number" name = "no" />
         count: <input type = "number" name = "count" value="1"/>
         <input type = "submit" />
      </form>
      
   </body>
</html>
