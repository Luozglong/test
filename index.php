<?php

echo "Hello World! azure 2";
include "test1.html";

$connectionInfo = array("UID" => "adminroot", "pwd" => "Dttmcnd3@", "Database" => "data2", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:banhang3.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
$query = "SELECT*from vandon";

$queryresive = mysqli_query($conn,$query);

while($querexcutr = mysqli_fetch_array($queryresive))
{
   
  echo "<div class=\"conten2\">

  <h1>".$querexcutr['nguoinhan']."</h1>
  <h2>".$querexcutr['dienthoai']."<h1>
  <h3>".$querexcutr['diachi']."</h1>   
  <h3>".$querexcutr['ngaygiaohang']."</h2> 
  <br> *".$querexcutr['ghichu']."<br/>
</div> ";

}
echo"</body></html>";
?>