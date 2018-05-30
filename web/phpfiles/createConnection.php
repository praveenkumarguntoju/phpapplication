<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
</head>

<body>
<?php
try
{
    $connection = new Mongo('mongodb://<username>:<password>@ds031347.mongolab.com:31347/your_database');
    $database   = $connection->selectDB('your_database');
    $collection = $database->selectCollection('tasks');
}
catch(MongoConnectionException $e)
{
    die("Failed to connect to database ".$e->getMessage());
}

?>
</body>

</html>
