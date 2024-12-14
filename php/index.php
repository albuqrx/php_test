<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="include/script.js"></script>
    <link rel="stylesheet" href="include/table.css">
    <?php
    require_once "include/CProducts.php";
    $db = CProducts::getProducts(6); ?>
</head>
<body>
    <div class="table-container">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <?php
                    foreach($db[0] as $key=>$product){
                       echo "<th>".$key."</th>";
                    } ?>
                    <th>HIDE</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($db as $product){
                    echo "<tr>";
                        foreach($product as $key=>$value){
                            echo "<td><span class='replace'>".$value."</span>";
                            if ($key == "PRODUCT_QUANTITY") { ?>
                                <input class="plusButton" type="button" value="+" id="<?php echo $product["ID"];?>">
                                <input class="minusButton" type="button" value="-" id="<?php echo $product["ID"];?>">
                            <?php }
                            echo "</td>";
                        }
                    echo "<td>";
                ?>
                    <input class="hideButton" type="button" value="hide" id="<?php echo $product["ID"];?>">
                    <?php echo "</td>";
                    echo "</tr>";
                }
            echo "</tbody>"; ?>
        </table>
    </div>

    <input class="visibleButton" type="submit" value="Visible All">

</body>

</html>






















