<?php 
class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DisFullException extends Exception{}

interface NetworkStorage
{
    function connect();
    function getType();
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
}
class PostgreSQLServer implements NetworkStorage
{
    function connect()
    {
        return true;
    }
    function getName()
    {
        return "PostgreSQL";
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
}

class ConnectionPool
{
    private $storage;
    function __contruct()
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
                $storage->connect();
            }
            catch(ServerLoadException $e)
            {
                echo $storage->getName()." is facting huge load";
            }
            catch(NetworkException $e)
            {
                echo $storage->getName()." is having some problem with it's network";
            }
            catch(DisFullException $e)
            {
                echo $storage->getName()." has it's disk full";
            }
        }
    }

}

?>