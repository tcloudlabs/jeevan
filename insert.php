
<?php
$a=$_REQUEST['a'];
$b=$_REQUEST['b'];
$c=$_REQUEST['c'];

$serverName = "tcp:employedba.database.windows.net,1433;";
$connectionInfo = array(  
    "Database" => "myfirstdba",  
    "UID" => "jeevan",  
    "PWD" => "Hazihanu12!@"  
); 
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}else{
    echo"sucess";
}


$sql = "INSERT INTO EMP (name, age, email) VALUES ('$a','$b','$c')";
$params = array(1, "some data");
$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}else{
    echo"insert sucess";
}

header("Location:retrive.php");
?>



