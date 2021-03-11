<div class="card" style="width: 70rem ;margin-left:80px; top: 20px;">
    <table class="table table-striped table-hover" border="1" style="text-align: center">
        <tr>
            <th>Tên sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Xuất sứ sản phẩm</th>
            <th>Ảnh</th>
            <th colspan="2"> Chức năng</th>
        </tr>
        <?php foreach ($products as $key => $product) : ?>
            <tr>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['product_type'] ?></td>
                <td><?php echo $product['origin'] ?></td>
                <td><img style="width: 50px" src="img/<?php echo $product['img'] ?>"></td>
                <td>
                    <a href="index.php?page=add=<?php echo $item['id'] ?>" class="btn btn-outline-warning btn-sm">Thêm </a>

                </td>
            </tr>


        <?php endforeach; ?>
</div>

</table>
