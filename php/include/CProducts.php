<?php

class CProducts
{
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";

    private static $dbname = "test";

    public static function getProducts(int $count)
    {
        $mysqli = self::getConnection();

        $result = $mysqli->query("SELECT ID, RPODUCT_ID, PRODUCT_NAME, PRODUCT_PRICE, PRODUCT_ARTICLE, PRODUCT_QUANTITY, DATE_CREATE 
                                        FROM products WHERE ACTIVE = 1
                                        ORDER BY DATE_CREATE DESC LIMIT $count");
        $table = $result->fetch_all(MYSQLI_ASSOC);

        $mysqli->close();
        return $table;
    }
    public static function getConnection()
    {
        return new mysqli(self::$servername, self::$username, self::$password, self::$dbname);

    }
    public static function hideRow(int $id, $active){
        $link = self::getConnection();

        $link->query("UPDATE `products` SET `ACTIVE` = $active WHERE `products`.`ID` = $id");

        $link->close();
    }

    public static function showAll(){
        $link = self::getConnection();

        $link->query("UPDATE `products` SET `ACTIVE` = true WHERE `ACTIVE` = false");

        $link->close();

    }

    public static function changeQuantity(int $id, int $quantity){
        $link = self::getConnection();

        $link->query("UPDATE `products` SET `PRODUCT_QUANTITY` = $quantity WHERE `products`.`ID` = $id");

        $link->close();
    }
}



















