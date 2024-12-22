<?php

echo "Hello World! azure 3";
include "test1.html";
$serverName = "banhang3.database.windows.net"; // update me
$connectionOptions = array(
    "Database" => "data2", // update me
    "Uid" => "adminroot", // update me
    "PWD" => "Dttmcnd3@" // update me
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT * FROM [dbo].[vandon] ";
$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE){
    echo (sqlsrv_errors());}
echo"</body></html>";
?>