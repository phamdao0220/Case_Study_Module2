<form method="post">
    <?php foreach ($items

    as $key => $item) ?>
    <div class="input-group mb-3">
        <span id="basic-addon1">Mã sản phẩm </span>
        <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
    </div>
    <div class="input-group mb-3">
        <span id="basic-addon1">Mã sản phẩm </span>
        <input type="number" name="items_code" value="<?php echo $item['items_code'] ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Tên sản phẩm </span>
        <input type="text" name="product_name" value="<?php echo $item['product_name'] ?>">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Giá sản phẩm </span>
        <input type="number" name="product_price" value="<?php echo $item['product_price'] ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Ghi chú </span>
        <input type="text" name="note" value="<?php echo $item['note'] ?>">
    </div>
    <div class="input-group mb-3">
        <span class="form-label">Ảnh </span>
        <input type="file" name="img">
        <input type="hidden" name="old_img" value="<?php echo $item['img'] ?>">

    </div>
    <button type="submit">Update</button>
    </div>

</form>

