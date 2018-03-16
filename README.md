<a href="https://www.codefactor.io/repository/github/revplit/geoip-api"><img src="https://www.codefactor.io/repository/github/revplit/geoip-api/badge" /></a>
# GeoIP-API
Revplit provides free usage of its Geo IP API through multiple response formats.  We support IPv4 and IPv6.

# Usage limits

Our system will automatically ban any IP addresses doing over 150 requests per minute. To unban your IP you'll have to sent a email to revplit.service@gmail.com

You are free to use our API for non-commercial and commercial use.

# Response formats
PHP https://revplit.com/pages/api/php-response.php

JSON https://revplit.com/pages/api/json-response.php

CSV https://revplit.com/pages/api/csv-response.php

# Code sample

<code>
&lt;?php 
  
  $result = ""; 
  
    if(isset($_POST['sub'])) { 
    
      $ip = $_POST['ip']; 
      
      if(!empty($_POST['ip'])) { 
      
        $result = @file_get_contents("https://api.revplit.com/geo/all.php?ip=".$ip); 
        
      } else { 
       
           $result = "No IP filled in"; 
           
        } 
        
       } 
       
?> 


&lt;form method="POST">
&lt;p>IP:&lt;/p>
&lt;input type="text" name="ip" placeholder="127.0.0" />

&lt;input type="submit" value="Submit" name="sub"/>
&lt;/form>

&lt;?php echo $result; ?>
</code>

# Support

If you've any questions you can ask them in our discord server https://discord.gg/BZfPMxe
