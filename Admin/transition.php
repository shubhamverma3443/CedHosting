<?php
require_once '../processLogic.php';
$operation = $_POST['operation'];
$data = $_POST['id'];
$dataArray = explode(" ", $data);
$id = $dataArray[0];
$name = $dataArray[1];
$deleteProduct = new admin();
if ($operation == "delete") {
    $res = $deleteProduct->deleteProduct($id, $name);
    if ($res == 1) {
        echo "success";
    } else {
        echo "Fail";
    }
} else {
}
