<?php 
class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DisFullException extends Exception{}

interface NetworkStorage
{
    function connect();
    function getName();
    function report($data);
}

class MySQLServer implements NetworkStorage
{
    function connect()
    {
        throw new DisFullException;
    }

    function getName()
    {
        return "MySQL";
    }

    function report($data)
    {

    }
}
class PostgreSQLServer implements NetworkStorage
{
    function connect()
    {
        return $this;
    }
    function getName()
    {
        return "PostgreSQL";
    }

    function report($data)
    {

    }
}
class MSSQLServer implements NetworkStorage
{
    function connect()
    {
        throw new NetworkException;
    }
    function getName()
    {
        return "MSSQL";
    }

    function report($data)
    {

    }
}

class ConnectionPool
{
    private $storage;
    private $connection;
    function __construct()
    {
        $this->storage = array();
    }
    function addStorage(NetworkStorage $storage)
    {
        array_push($this->storage,$storage);
    }
    function getConnection()
    {
        foreach($this->storage as $storage)
        {
            try
            {
                $this->connection = $storage->connect();
            }
            catch(ServerLoadException $e)
            {
                echo $storage->getName()." is facting huge load";
                $storage->report(array('ip'=>'123.123.123.111','error'=>'load'));
            }
            catch(NetworkException $e)
            {
                echo $storage->getName()." is having some problem with it's network";
                $storage->report(array('ip'=>'123.123.123.111','error'=>'network'));
            }
            catch(DisFullException $e)
            {
                echo $storage->getName()." has it's disk full";
            }
            if($this->connection)
            {
                break;
            }
        }
        if($this->connection)
        {
            return $this->connection;
        }
        return false;
    }

}
$mysql = new MySQLServer();
$pgsql = new PostgreSQLServer();
$mssql = new MSSQLServer();

$cp = new ConnectionPool();
$cp->addStorage($mysql);
$cp->addStorage($pgsql);
$cp->addStorage($mssql);

$connection = $cp->getConnection();
print_r($connection);

?>