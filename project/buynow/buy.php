<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../landingPage/design.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php include("../landingPage/header.php"); ?> 
    
    <!-- <input type="button" value="Go Back!" onclick="history.back(-1)" /> -->
    
    <div class="card">
        <div class="imgBx">
            <img src="../amazon/dress7.jpg" alt="">
        </div>
        <div class="details">
            <h3 class="pn">Men's Jacket  </h3>
            <h3 class="pp">Rs 3000 </h3>
            
             
            
            <h4>Proudct Details</h4>
            <p class="pag">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga vero ut autem architecto non incidunt!</p>
            <h4>Size</h4>
            <ul class="Size">
                <li>S</li>
                <li>M</li>
                <li>L</li>
                <li>XL</li>
            </ul>
            <div class="group">
                
                <button class="atc" onclick="myfunction()">BUY NOW</button>

                <div class="qty">
                    <a href="../addtocart/cart.html">
                    <button class="atc"> + Add to Cart</button></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myfunction(){
            window,alert("thanks for buying");
        }
    </script>

    <footer>
        <?php include("../landingPage/footer.php");?>
    </footer>


</body>
</html>