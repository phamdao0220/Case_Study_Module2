<button>
    <a href="index.php?page=add">Thêm sản phẩm</a>
</button>
<table class="table table-striped table-hover" border="1">
    <tr>
        <th>STT</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Ghi chú</th>
        <th>Ảnh</th>
        <th>Actions</th>
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
                <button onclick="return confirm('Bạn có muốn xoá <?php echo $item["product_name"] ?> không ')">
                    <a href="index.php?page=delete&id=<?php echo $item['id'] ?>">Xoá </a>
                </button>
            </td>
            <td>
                <button>
                    <a href="index.php?page=edit&id=<?php echo $item['id'] ?>">Sửa</a>
                </button>
            </td>

            <!--                    <td class="text-danger">Delete | <span class="text-warning" >Edit</span></td>-->
        </tr>
    <?php endforeach; ?>

</table>
</div>
</main>
