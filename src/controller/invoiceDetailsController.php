<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-03-10
 * Time: 09:33
 */

namespace App\controller;
use App\model\invoiceDetailsModel;

class invoiceDetailsController
{
    protected $InvoiceDetailsModel;

    public function __construct()
    {
        $this->InvoiceDetailsModel = new invoiceDetailsModel();
    }

    public function show()
    {
        $invoices = $this->InvoiceDetailsModel->getAll();
        include 'src/view/Invoice_details/invoice_details.php';
    }
}
