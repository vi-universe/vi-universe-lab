<?php
$hostname = gethostname();
echo "<body style='background-color:#3F5062'>";
echo ' 
 <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
  <table align="center">
   <tr>
    <td colspan="3" align="center">
     <img src="nsxlogo.png" width="25%" title="NSX Logo" alt="NSX Logo"/>
    </td>
   </tr>
   <tr>
    <td width="33%"></td>
    <td align="center"><br><b>' . $hostname . '</b>
    </td>
    <td width="33%"></td>
   </tr>
  </table>
 </html>';
$ip        = $_SERVER["REMOTE_ADDR"];
$hostipcmd = "hostname -i";
$localIP   = exec($hostipcmd);
echo "<br> 
<table align='center'>
 <tr>
  <th align=left>LOADBALANCER IP: </th>
  <th></th>
  <th></th>
  <th align=left>" . $ip . "</th>
  <th></th>
 </tr>
 <tr>
  <th></th>
  <th></th>
 </tr>
 <tr>
  <th align=left>OWN IP:</th>
  <th></th>
  <th></th>
  <th align=left>" . $localIP . "</th>
  <th></th>
 </tr>
</table><br>";
?>
