<?php $products = $db->execute_query('select * from products where 1')->fetch_all(MYSQLI_ASSOC); ?>

<div class="section">
    <?php
    foreach ($products as $_key => $product) {
    ?>

        <div class="element">
            <?php if ($product['sale'] === 1) { ?>
                <span class="sale">Sale</span>
            <?php } ?>
            <?php if ($product['hot'] === 1) { ?>
                <span class="hot">Hot</span>
            <?php } ?>
            <div class="img">
                <img src="<?= $product['image'] ?>" alt="" />
                <div class="settings">
                    <a href="#" class="left-r"><i class="fa-regular fa-heart fa-fw icon"></i></a>
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping fa-fw icon"></i></a>
                    <a href="single.php"><i class="fa-regular fa-eye fa-fw icon"></i></a>
                    <a href="#" class="right-r"><i class="fa-solid fa-right-left fa-fw icon"></i></a>
                </div>
            </div>
            <div class="info">
                <a href="single.php">
                    <p><?= $product['name'] ?></p>
                </a>

                <?php
                $price = $product['price'];
                $new_price = $product['new_price'];
                ?>

                <?php if ($new_price > 0) { ?>
                    <del>$<?= $price ?></del>
                <?php } ?>
                <span>$<?= $new_price > 0 ? $new_price : $price ?></span>
            </div>
        </div>
    <?php
    }
    ?>
</div>