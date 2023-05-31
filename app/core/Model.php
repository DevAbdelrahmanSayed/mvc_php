<?php
namespace BLOG\core; 
use Dcblogdev\PdoWrapper\Database;
class Model 
{
    static function db ()
    {
    // make a connection to mysql here
        $options = [
            //required
            'username' => USERNAME,
            'database' => 'blog',
            //optional
            'password' => PASSWORD,
            'type' => DATABASE_TYPE,
            'charset' => DATABASE,
            'host' => SERVER,
            'port' => '3306'
                    ];
            return $db = new Database($options);
    } 

}
