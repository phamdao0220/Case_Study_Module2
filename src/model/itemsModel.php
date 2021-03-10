<?php

namespace App\model;

use PDO;

class itemsModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function findById($id)
    {
        $sql = "Select * FROM v_items WHERE id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM v_items";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addItems($items_code, $product_name, $product_price, $note, $img)
    {

        $sql = 'INSERT INTO Items (`items_code`,`product_name`,`product_price`,`note`,`img`)
                VALUES(:items_code,:product_name,:product_price,:note,:img)';

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":items_code", $items_code);
        $stmt->bindParam(":product_name", $product_name);
        $stmt->bindParam(":product_price", $product_price);
        $stmt->bindParam(":note", $note);
        $stmt->bindParam(":img", $img);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleteItems($id)
    {
        $sql = 'DELETE FROM v_items where id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

    }

    public function editItems($id, $items_code, $product_name, $product_price, $note, $img)

    {
        $sql = 'UPDATE Items SET `items_code`=:items_code,`product_name`=:product_name,`product_price`=:product_price,`note`=:note,`img`=:img WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':items_code', $items_code);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':product_price', $product_price);
        $stmt->bindParam(':note', $note);
        $stmt->bindParam(':img', $img);
        $stmt->execute();
    }

    public function find($search)
    {
        $sql = "SELECT * FROM v_items WHERE items_code LIKE '$search'or  product_name LIKE '$search'";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
