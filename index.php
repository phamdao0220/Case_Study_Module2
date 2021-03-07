<?php
ob_start();

use App\Controller\itemsController;

require __DIR__ . '/vendor/autoload.php';
$page = isset($_GET['page']) ? $_REQUEST['page'] : '';
$itemsController = new ItemsController();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=items">Danh sách sản phẩm </a>
</body>
</html>
<?php
switch ($page) {
    case 'items':
        $itemsController->show();
        break;
    case 'add':
        $itemsController->addItems();
        break;
    case 'delete':
        $itemsController->deleteItems();
        break;
    case 'edit':
        $itemsController->editItems();
        break;
//        $id = $_REQUEST['id'];
//        echo 'xoa tai vi tri co id: '.$id;
//    default:
//        $itemsController->show();
//        break;
}
ob_end_flush();
?>

