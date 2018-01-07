<?php
  $result = "";
    if(isset($_POST['sub'])) {
      $ip = $_POST['ip'];
      if(!empty($_POST['ip'])) {
        $result = @file_get_contents("https://api.revplit.com/geo/city.php?ip=".$ip);
      } else {
           $result = "No IP filled in";
        }
       }
?>

<form method="POST">
<p><b>IP:</b></p>
<input type="text" name="ip" placeholder="127.0.0" />

<input type="submit" value="Submit" name="sub"/>
</form>

<?php echo $result; ?>
