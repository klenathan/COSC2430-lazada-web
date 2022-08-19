<?php
header("Content-type: application/json; charset=UTF-8");
http_response_code(200);

echo json_encode(
    array("test"=>"test1",
    "test2" => 2)
)

?>