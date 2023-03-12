<?php
define('DB_SERVER',sql12.freemysqlhosting.net);
define('DB_USER','sql12604983');
define('DB_PASS' ,'8Wp1LRIvRP');
define('DB_NAME', 'sql12604983');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
