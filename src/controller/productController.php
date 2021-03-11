<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-03-10
 * Time: 15:59
 */

namespace App\controller;


use App\model\productModel;

class productController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new productModel();
    }

    public function show()
    {
        $products = $this->ProductModel->getAll();
        include 'src/view/Product_details/product.php';
    }
    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $products = $this->ProductModel->getAll();
            include "src/view/Product_details/add.php";
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $product_type = $_POST['product_type'];
            $origin = $_POST['origin'];
            $img = $_FILES['my-file']['name'];
            $img_tmp = $_FILES['my-file']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);
            $items= $this->ProductModel->addProduct(
                $name,
                $product_type,
                $origin,
                $img
            );
            $this->redirectToList();
            include "src/view/Product_details/add.php";
        }

    }

    private function redirectToList()
    {

        $products = $this->ProductModel->getAll();
        header("location:index.php?page=product");

    }
}
