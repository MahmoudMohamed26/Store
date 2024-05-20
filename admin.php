<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin control Panel</title>
</head>

<body>

    <?php

    if (isset($_POST['add'])) {
        include 'db.php';
        $file = $_FILES['image'];
        $image = "imgs/{$file['name']}";

        move_uploaded_file($file['tmp_name'], $image);
        $db->execute_query("insert into products (name, price, new_price, image, sale, hot) VALUES(?, ?, ?, ?, ?, ?)", [
            $_POST['name'], $_POST['price'], $_POST['new_price'], $image,
            isset($_POST['sale']) && $_POST['sale'] === "on" ? 1 : 0,
            isset($_POST['hot']) && $_POST['hot'] === "on" ? 1 : 0,
        ]);

        $valid = true;
    }

    ?>


    <div class="section">
        <div class="container">
            <div class="form">
                <div class="header3">
                    <h1 class="">ADD PRODUCTS</h1>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div>
                        <input type="text" required name="name" placeholder="Enter Product Name ...">
                    </div>
                    <div>
                        <label for="image">Select product image </label>
                        <input type="file" required name="image" accept="image/*" id="image">
                    </div>
                    <div>
                        <input type="text" required name="price" placeholder="Enter Product Price ...">
                    </div>
                    <div>
                        <input type="checkbox" name="sale" id="sale">
                        <label for="sale">Does this product have sale ?</label> <br>
                        <input type="text" name="new_price" placeholder="Enter the new price ...">
                    </div>
                    <div>
                        <input type="checkbox" name="hot" id="hot">
                        <label for="hot">Does this product HOT ?</label>
                    </div>
                    <div>
                        <button type="submit" name="add" class="add"><span>Add Product</span></button>
                        <p class="state"><?= isset($valid) ? "Product added successfully" : "" ?></p>
                    </div>
                </form>
                <a href="index.php"><button class="back"><span>HOME</span></button></a>
            </div>
        </div>
    </div>


</body>

</html>