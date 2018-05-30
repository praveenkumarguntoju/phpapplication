<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
</head>

<body>
<?php
try
{
    $connection = new Mongo('mongodb://chintu:chintu123@ds229415.mlab.com:29415/taxidetails');
  
    echo "connection success";
}
catch(MongoConnectionException $e)
{
    die("Failed to connect to database ".$e->getMessage());
}

?>
</body>

</html>
