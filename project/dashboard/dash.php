<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="das.css">
    <link rel="stylesheet" href="../landingPage/design.css">

</head>
<body>
    <header>
        <?php include '../landingPage/header.php' ?>
    </header>

    <div class="dash">
        <h1 class="oh">Dashboard for seller</h1>
        <div class="indash">
            <p class="controls">
                <a href="add.php"><button class="bt"> add </button></a>
                <a href="view.php"><button class="bt"> view all </button></a>
                <a href="payments.php"><button class="bt"> payments </button></a>
                <a href=""><button class="bt">modify  </button></a>
              
            </p>
            <h1 class="hea">Your Products</h1>
            
                <div class="dis">
                    <img src="../amazon/dress1.jpg" alt="product image">
                    <img src="../amazon/dress6.jpg" alt="product image">
                    <img src="../amazon/dress3.jpg" alt="product image">
                    <!-- <img src="../amazon/dress10.jpg" alt="product image"> -->
                </div>
        
        </div>
    </div>
    <footer>
    <div class="fotter"> 
    <?php include('../landingPage/footer.php');?>
</footer>
</body>
</html>