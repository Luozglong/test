<?php

echo "Hello World! azure 3";
include "test1.html";
try{
    $connectionInfo = array("UID" => "adminroot", "pwd" => "Dttmcnd3@", "Database" => "data2", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:banhang3.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $query = "select * from [dbo].[vandon]";
    
    $queryresive = mysqli_query($conn,$query);
    
}catch{
    echo"<h1> not work</h1>";
}
echo"</body></html>";
?>