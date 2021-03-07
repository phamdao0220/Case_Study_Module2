
<?php

require_once "src/view/blocks/items.php";

?>


<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php?page=search">Kết Quả</a>

    </div>
    <table class="table">
        <thead>
        <tr>
            <th>STT</th>
            <th>Mã thực phẩm </th>
            <th>Tên thực phẩm</th>
            <th>Loại thực phẩm</th>
            <th>Giá </th>
            <th>Ảnh minh họa</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($items as $key => $item): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $item['foodCode'] ?></td>
                <td><?php echo $item['foodName'] ?></td>
                <td><?php echo $item['foodLine'] ?></td>
                <td><?php echo $item['buyPrice'] ?></td>
                <td>
                    <img style="width: 100px" src="img/<?php echo $item['img'] ?> ">
                </td>
                <!--                <td><a href="index.php?page=delete&id=--><?php //echo $food->id ?><!--" class="btn btn-danger">Delete</a></td>-->
                <!--                <td><a href="index.php?page=edit&id=--><?php //echo $food->id ?><!--" class="btn btn-success">Edit</a></td>-->

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php

require_once "src/view/blocks/footer.php";

?>
