<form method="post" enctype="multipart/form-data">
    <div class="card" style="width: 50rem;top: 20px;">
        <div class="input-group mb-3">
            <label for="product_code" class="input-group-text">Mã sản phẩm </label>
            <input class="form-control" type="number" class="form-control" name="items_code">

        </div>

        <div class="input-group mb-3">
            <label for="product_name" class="input-group-text">Tên sản phẩm </label>
            <input class="form-control" type="text" class="form-control" name="product_name">

        </div>

        <div class="input-group mb-3">
            <label for="list_price" class="input-group-text">Gía sản phẩm </label>
            <input class="form-control" type="number" class="form-control" name="product_price">
        </div>
        <div class="input-group mb-3">
            <label for="discontinued" class="input-group-text">Ghi chú </label>
            <input class="form-control" type="text" class="form-control" name="note">
        </div>
        <div class="input-group mb-3">
            <label for="formFileMultiple" class="form-label">Ảnh </label>
            <input class="form-control" type="file" class="form-control" name="my-file">
        </div>
    </div>
    <div style="margin-top: 20px">
        <button class="btn btn-outline-success" type="submit" style="top:">Thêm</button>
        <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;" type="submit">Huỷ
        </button>
    </div>
</form>

