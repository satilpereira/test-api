<?php
// Headers
header('Acess-Control-Allow-Origin: *');
header('Content-Type: application.json');

include_once '../../config/Database.php';
include_once '../../models/Coordinates.php';

$database = new Database();
$db = $database->connect();


$coordinates = new Coordinates($db);

$result = $coordinates->read();

$num = $result->rowCount();

if ($num > 0) {
    $coordinates_arr = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $coordinate_item = array(
            'id' => $id,
            'x' => $x,
            'y' => $y
        );

        array_push($coordinates_arr, $coordinate_item);
    }

    echo json_encode($coordinates_arr);
} else {
    echo json_encode(
        array('message' => 'No coordinates found')
    );
}
?>