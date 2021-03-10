<form method="post" enctype="multipart/form-data">
    <div class="card" style="width: 50rem;top: 20px;">
        <div class="">
            <label for="product_code" class="form-label">Mã sản phẩm </label>
            <input type="number" class="form-control" name="items_code">

        </div>

        <div class="">
            <label for="product_name" class="form-label">Tên sản phẩm </label>
            <input type="text" class="form-control" name="product_name">

        </div>

        <div class="">
            <label for="list_price" class="form-label">Gía sản phẩm </label>
            <input type="number" class="form-control" name="product_price">
        </div>
        <div class="">
            <label for="discontinued" class="form-label">Ghi chú </label>
            <input type="text" class="form-control" name="note">
        </div>
        <div class="">
            <label for="standard_cost" class="form-label">Ảnh </label>
            <input type="file" class="form-control" name="my-file">
        </div>
    </div>
    <div style="margin-top: 20px">
        <button class="btn btn-outline-success" type="submit" style="top:">Thêm</button>
        <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;" type="submit">Huỷ
        </button>
    </div>
</form>

