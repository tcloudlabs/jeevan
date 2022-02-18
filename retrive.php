


<?php
$serverName = "tcp:jeefaxyz.database.windows.net,1433";  
$connectionOptions = array(  
    "Database" => "jeevanabc",  
    "UID" => "jeevan",  
    "PWD" => "Hazihanu12!@"  
);  
$conn = sqlsrv_connect($serverName, $connectionOptions);  
  
if ($conn === false)  
    {  
    die(print_r(sqlsrv_errors() , true));  
    }  else {

        echo("sucessbda");
    }


    $sql = "SELECT * FROM EMP"; 
    $stmt = sqlsrv_query($conn, $sql); 
    if($stmt === false) 
    { 
    die(print_r(sqlsrv_errors(), true)); 
    } 
     
    if(sqlsrv_has_rows($stmt)) 
    { 
    print("<table border='1px'>"); 
    print("<tr><td>NAME</td>"); 
    print("<td>AGE</td>"); 
    print("<td>Email</td></tr>"); 
     
    while($row = sqlsrv_fetch_array($stmt)) 
    { 
     
    print("<tr><td>".$row['name']."</td>"); 
    print("<td>".$row['age']."</td>"); 
    print("<td>".$row['email']."</td></tr>"); 
    } 
     
    print("</table>"); 
    }