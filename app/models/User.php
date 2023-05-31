<?php
namespace BLOG\models;
use BLOG\core\Model;
class User extends Model
{
    public function get_all()
    {
        $query ="SELECT * FROM users";
        $data = MOdel::db()->rows($query);
        return $data ;
    }
 public function inser_data($data=[])
{
    $query = "INSERT INTO users (username, email, password, profile_photo) VALUES (:username,:email,:password,:profile_photo)";
    $data = Model::db()->insert($query, $data);
    return $data;
}



}