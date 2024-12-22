<?php

echo "Hello World! azure 3";
include "test1.html";
try {
    $conn = new PDO("sqlsrv:server = tcp:banhang3.database.windows.net,1433; Database = data2", "adminroot", "{Dttmcnd3@}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print("connecting to SQL Server.");
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
try{
$connectionInfo = array("UID" => "adminroot", "pwd" => "{Dttmcnd3@}", "Database" => "data2", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:banhang3.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
print(" connecting to SQL Server.");
}catch{
    print("Error connecting to SQL Server. 2");
}
echo"</body></html>";
?>