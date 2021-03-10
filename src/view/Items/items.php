<div class="card" style="width: 70rem ;margin-left:80px; top: 20px;">
    <table class="table table-striped table-hover" border="1" style="text-align: center">
        <tr>
            <th>STT</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Ghi chú</th>
            <th>Ảnh</th>
            <th colspan="2"> Chức năng</th>
        </tr>
        <?php foreach ($items as $key => $item) : ?>
            <tr>
                <td class="text-center"><?php echo $key + 1 ?></td>
                <td>
                    <?php echo $item['items_code'] ?>
                    <!--                        <a href="index.php?page=product-details&id=-->
                    <?php //echo $item['id'] ?><!--"></a>-->
                </td>
                <td><?php echo $item['product_name'] ?></td>
                <td><?php echo $item['product_price'] ?></td>
                <td><?php echo $item['note'] ?></td>
                <td><img style="width: 100px" src="img/<?php echo $item['img'] ?>"></td>
                <td>
                    <a onclick="return confirm('Bạn có muốn xoá <?php echo $item["product_name"] ?> không ')""
                    href="index.php?page=delete&id=<?php echo $item['id'] ?>" class="btn btn-outline-danger
                    btn-sm">Xoá </a>
                </td>
                <td>
                    <a href="index.php?page=edit&id=<?php echo $item['id'] ?>" class="btn btn-outline-warning btn-sm">Sửa</a>

                </td>
            </tr>

        <?php endforeach; ?>
</div>

</table>
