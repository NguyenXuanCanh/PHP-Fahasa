<?php
include('../connect.php');
$sql = "SELECT nameProduct FROM product";
$KQ = $mysqli->query($sql);
foreach ($KQ as $row) {
    $newResults[] = array('newId' => $row['product_id'], 'newName' => $row['name'], 'newDate' => $row['date']);
}
echo json_encode($newResults);
// $id_numbers = [1, 2, 3];
// echo json_encode($id_numbers);
