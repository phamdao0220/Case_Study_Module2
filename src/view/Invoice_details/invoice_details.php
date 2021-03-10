<div class="card" style="width: 70rem ;margin-left:80px; top: 20px;">
    <table class="table table-striped table-hover" border="1" style="text-align: center">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Danh mục</th>
            <th>Món</th>
            <th>Số lượng</th>
            <th>Giảm giá</th>
            <th>Thanh toán</th>
        </tr>
        <?php foreach ($invoices as $key => $invoice) : ?>
            <tr>
                <td><?php echo $invoice['invoice_id'] ?>"></td>
                <td><?php echo $invoice['category'] ?></td>
                <td><?php echo $invoice['dishes'] ?></td>
                <td><?php echo $invoice['amount'] ?></td>
                <td><?php echo $invoice['discount'] ?></td>
                <td><?php echo $invoice['pay'] ?></td>
            </tr>

        <?php endforeach; ?>
</div>

</table>
