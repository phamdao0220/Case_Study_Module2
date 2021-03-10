<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-03-10
 * Time: 15:59
 */

namespace App\model;


class productModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

//    public function findById($id)
//    {
//        $sql = "Select * FROM v_items WHERE id =:id";
//        $stmt = $this->database->prepare($sql);
//        $stmt->bindParam(':id', $id);
//        $stmt->execute();
//        return $stmt->fetchAll();
//    }

    public function getAll()
    {
        $sql = "SELECT * FROM Product_details";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
