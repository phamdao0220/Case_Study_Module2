<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>-->

<form method="post" enctype="multipart/form-data">
    <?php foreach ($items as $key => $item) ?>
    <div class="input-group mb-3">
        <span id="basic-addon1"></span>
        <input class="form-control" type="hidden" name="id" value="<?php echo $item['id'] ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Mã sản phẩm </span>
        <input class="form-control" type="number" name="items_code" value="<?php echo $item['items_code'] ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Tên sản phẩm </span>
        <input class="form-control" type="text" name="product_name" value="<?php echo $item['product_name'] ?>">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Giá sản phẩm </span>
        <input class="form-control" type="number" name="product_price" value="<?php echo $item['product_price'] ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Ghi chú </span>
        <input class="form-control" type="text" name="note" value="<?php echo $item['note'] ?>">
    </div>
    <div class="form-label">
        <span for="formFileMultiple" class="form-label">Ảnh </span>
        <input class="form-control" type="file" name="my-file">
        <div><img style="width: 100px" src="img/<?php echo $item['img'] ?>"></div>
        <input type="hidden" name="old_img" value="<?php echo $item['img'] ?>">

    </div>
    <button class="btn btn-outline-warning" type="submit">Sửa</button>
    <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;" type="submit">Huỷ</button>

    </div>

</form>

