<?php

echo "<div class = \"conten2\">Hello World! azure 4";
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
echo ("Reading data from table</div>" . PHP_EOL);
if ($getResults == FALSE){
    echo (sqlsrv_errors());}

while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) { 
    echo ("<div class=\"box\"><a>".$row['nguoinhan'] . " " . $row['dienthoai']."</a></div>" . PHP_EOL);
}   
sqlsrv_free_stmt($getResults);
echo"</body></html>";
?>