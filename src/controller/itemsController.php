<?php

namespace App\controller;

use App\model\itemsModel;

class itemsController
{
    protected $ItemsModel;

    public function __construct()
    {
        $this->ItemsModel = new itemsModel();
    }

    public function show()
    {
        $items = $this->ItemsModel->getAll();
        include 'src/view/Items/items.php';
    }

    public function addItems()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $items = $this->ItemsModel->getAll();
            include "src/view/Items/add.php";
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $items_code = $_POST['items_code'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $note = $_POST['note'];
            $img = $_FILES['my-file']['name'];
            $img_tmp = $_FILES['my-file']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);
            $result = $this->ItemsModel->addItems(
                $items_code,
                $product_name,
                $product_price,
                $note,
                $img
            );
            $this->redirectToList();
            include "src/view/Items/add.php";
        }

    }

    private function redirectToList()
    {

        $products = $this->ItemsModel->getAll();
        header("location:index.php?page=items");

    }

    public function deleteItems()
    {
        $id = $_REQUEST['id'];
        $this->ItemsModel->deleteItems($id);
        $this->redirectToList();
    }

    public function editItems()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $items = $this->ItemsModel->findById($id);
            include_once "src/view/Items/edit.php";
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $items_code = $_POST['items_code'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $note = $_POST['note'];
            $img = $_FILES['my-file']['name'];
            $img_tmp = $_FILES['my-file']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);
            if ($img == null) {
                $img = $_POST['old_img'];
            }

            $this->ItemsModel->editItems($id, $items_code, $product_name, $product_price, $note, $img);
            $this->show();
//            header('location:index.php?page=items');
        }



    }

    public function search()
    {

        $search = '%' . $_REQUEST['search'] . '%';
        $items = $this->ItemsModel->find($search);
        include "src/view/Items/items.php";
    }

}




