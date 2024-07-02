<?php
include "../main/connection.php";

// session checkpoint
session_start();
if (isset($_SESSION['buyer_id'])) {
    $buyer_id = $_SESSION['buyer_id'];
} else {
    $buyer_id = "";
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("location: ../login/loginn1.php?logout=1");
    $message[] = "logged out of system";
}

// adding a product in cart
if (isset($_POST['add_to_cart'])) {
    $id = uniqid();
    $product_id = $_POST['product_id'];
    $qty = $_POST['qty'];
    $qty = filter_var($qty, FILTER_SANITIZE_NUMBER_INT);

    $stmt = $conn->prepare('SELECT * FROM cart WHERE buyer_id = ? AND product_id = ?');
    $stmt->bind_param('ss', $buyer_id, $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $stmt = $conn->prepare("SELECT * FROM cart WHERE buyer_id=?");
    $stmt->bind_param('s', $buyer_id);
    $stmt->execute();
    $result_cart = $stmt->get_result();

    if ($result->num_rows > 0) {
        $warning_msg[] = 'product already in your cart';
    } else if ($result_cart->num_rows > 20) {
        $warning_msg[] = 'cart is already full';
    } else {
        $stmt = $conn->prepare("SELECT * FROM products WHERE id = ? AND status= ? LIMIT 1");
        $status = 'Active';
        $stmt->bind_param('ss', $product_id, $status);
        $stmt->execute();
        $result = $stmt->get_result();
        $fetch_price = $result->fetch_assoc();

        $stmt = $conn->prepare("INSERT INTO cart (id, buyer_id, product_id, price, qty) VALUES(?,?,?,?,?)");
        $stmt->bind_param('sssss', $id, $buyer_id, $product_id, $fetch_price['price'], $qty);
        $stmt->execute();
        $success_msg[] = 'successfully added to cart';
    }
}

if (isset($_GET['id'])) {
    $Product_id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id='$Product_id'";
    $all = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="../landingPage/design.css">
    <style>
        body {
            align-items: center;
            min-height: 90vh;
            background-color: #8fd5fe;
            background-image: linear-gradient(160deg, #8fd5fe 0%, #80D0C7 100%);
        }

        .card {
            position: relative;
            width: 90%;
            transform: scale(0.7);
            background: #0000;
            display: flex;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
        }

        .imgBx {
            position: relative;
            width: 400px;
            height: 700px;
            display: flex;
        }

        .details {
            position: absolute;
            top: 0;
            left: 600px;
            text-align: center;
            height: 100%;
        }

        .details h3 {
            text-align: left;
            font-size: 48px;
            margin-top: 15px;
        }

        .details h4 {
            font-size: 28px;
            text-align: left;
            margin-top: 40px;
        }

        .pag {
            font-size: 20px;
            text-align: left;
            margin-top: 10px;
        }

        .Size {
            display: flex;
            margin-top: 30px;
        }

        .Size li {
            border: #000000 solid 1px;
            list-style-type: none;
            margin: 0;
            text-align: center;
            background-color: #f9f9f9;
            color: black;
            padding: 12px;
            box-sizing: border-box;
            font-size: 25px;
        }

        .Size li:hover {
            background-color: #8BC6EC;
            background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
            box-shadow: 0px -7px;
        }

        .group {
            font-size: 24px;
            margin: 10px;
            float: left;
        }

        .atc {
            margin: 10px;
            font-size: 25px;
            height: 50px;
            background-color: #fff;
            cursor: pointer;
            margin-top: 30px;
        }

        .atc:hover {
            background-color: #8BC6EC;
            background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
            box-shadow: -5px -5px;
        }
    </style>
</head>

<body>
    <?php include("../landingPage/header.php"); ?>

    <section class="sign-board">
        <h1>All products</h1>
        <strong><a style="color:inherit" href="home.php">HOME</a>&nbsp; &nbsp;/PRODUCTS</strong>
    </section>

    <!-- filter container -->
    <div class="container">
        <div class="categories">
            <div class="category-box <?= getActiveClass('all', $type) ?>" onclick="window.location.href='?type=all';">All</div>
            <div class="category-box <?= getActiveClass('berries', $type) ?>" onclick="window.location.href='?type=berries';">Berries</div>
        </div>
    </div>

    <section class="products">
        <div class="item">
            <?php while ($fetch_products = mysqli_fetch_assoc($all)) { ?>
                <div class="card">
                    <div class="imgBx">
                        <img src="<?php echo $fetch_products['pimg'] ?>" alt="">
                    </div>
                    <div class="details">
                        <h3 class="pn"><?php echo $fetch_products['pname'] ?> </h3>
                        <h3 class="pp">Rs <?php echo $fetch_products['price'] ?> </h3>
                        <h4>Product Details</h4>
                        <p class="pag"><?php echo $fetch_products['descript'] ?></p>
                        <h4>Size</h4>
                        <ul class="Size">
                            <li>S</li>
                            <li>M</li>
                            <li>L</li>
                            <li>XL</li>
                        </ul>
                        <div class="group">
                            <button class="atc" onclick="myfunction()">BUY NOW</button>
                            <form action="" method="post" class="qty">
                                <input type="hidden" name="product_id" value="<?= $fetch_products['id']; ?>">
                                <input type="number" name="qty" min="1" value="1" class="qty">
                                <button type="submit" class="atc" name="add_to_cart"> + Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <script>
        function myfunction() {
            window.alert("thanks for buying");
        }
    </script>

    <footer>
        <?php include("../landingPage/footer.php"); ?>
    </footer>
</body>

</html>
<?php
}
?>
