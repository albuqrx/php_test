<?php
require_once "CProducts.php";

CProducts::changeQuantity($_POST["id"], $_POST["count"]);


//echo json_encode(array('id' => $_POST["id"], 'count' => $_POST["count"]));