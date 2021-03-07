<form method="post" enctype="multipart/form-data">
    <div class="col-sm-6">
        <label for="product_code" class="form-label">Mã sản phẩm </label>
        <input type="number" class="form-control" name="items_code">

    </div>

    <div class="col-sm-6">
        <label for="product_name" class="form-label">Tên sản phẩm </label>
        <input type="text" class="form-control" name="product_name">

    </div>

    <div class="col-md-3">
        <label for="list_price" class="form-label">Gía sản phẩm </label>
        <input type="number" class="form-control" name="product_price">
    </div>
    <div class="col-md-3">
        <label for="discontinued" class="form-label">Ghi chú </label>
        <input type="text" class="form-control" name="note">
    </div>
    <div class="col-md-3 col-md-offset-3">
        <label for="standard_cost" class="form-label">Ảnh </label>
        <input type="file" class="form-control" name="my-file">
    </div>

    </div>

    <button class="btn btn-primary btn-lg" type="submit">add</button>
</form>

