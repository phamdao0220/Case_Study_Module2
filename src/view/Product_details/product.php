<form method="post" enctype="multipart/form-data">
    <?php foreach ($products as $key => $product) ?>
    <div class="card" style="width: 50rem;top: 20px;">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Tên sản phẩm </span>
        <input class="form-control" type="text" name="items_code" value="<?php echo $product['name'] ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Loại sản phẩm </span>
        <input class="form-control" type="text" name="product_name" value="<?php echo $product['product_type'] ?>">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Xuất sứ sản phẩm </span>
        <input class="form-control" type="text" name="product_price" value="<?php echo $product['origin'] ?>">
    </div>
    <div class="form-label">
        <span for="formFileMultiple" class="form-label">Ảnh </span>
        <input class="form-control" type="file" name="my-file">
        <div><img style="width: 100px" src="img/<?php echo $product['img'] ?>"></div>
<!--        <input type="hidden" name="old_img" value="--><?php //echo $product['img'] ?><!--">-->

<!--    </div>-->
<!---->
<!--    <button class="btn btn-outline-warning" type="submit">Sửa</button>-->
<!--    <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;" type="submit">Huỷ</button>-->
<!---->
<!--    </div>-->

</form>

