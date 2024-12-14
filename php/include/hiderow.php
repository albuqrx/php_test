<?php

require_once "CProducts.php";

if (isset($_POST["id"]) && isset($_POST["active"])) {

    CProducts::hideRow($_POST["id"], $_POST["active"]);

}

