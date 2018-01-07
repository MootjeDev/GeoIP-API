# PHP Response format
https://revplit.com/pages/api/php-response.php

Country: https://api.revplit.com/geo/country.php?ip=

Country Code: https://api.revplit.com/geo/countryCode.php?ip=

Region: https://api.revplit.com/geo/regionName.php?ip=

RegionCode: https://api.revplit.com/geo/regionCode.php?ip=

City: https://api.revplit.com/geo/city.php?ip=

ZIP Code: https://api.revplit.com/geo/zip.php?ip=

Latitude: https://api.revplit.com/geo/lat.php?ip=

Longitude: https://api.revplit.com/geo/lon.php?ip=

Timezone: https://api.revplit.com/geo/timezone.php?ip=

ISP: https://api.revplit.com/geo/isp.php?ip=

Organization: https://api.revplit.com/geo/org.php?ip=

AS number/name: https://api.revplit.com/geo/as.php?ip=

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

# Usage limits

Our system will automatically ban any IP addresses doing over 150 requests per minute. To unban your IP you'll have to sent a email to revplit.service@gmail.com

# Support

If you've any questions you can ask them in our discord server https://discord.gg/BZfPMxe
