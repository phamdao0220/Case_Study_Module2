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
        $product = $this->ProductModel->getAll();
        include 'src/view/Product_details/product.php';
    }
}
