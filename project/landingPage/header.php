<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>still head</title>
    <link rel="stylesheet" href="design.css">
    
</head>

<body>
    
<header>
    <div class="navbar">
        <div class="nav-logo border">
            <div class="logo"  >
        <script>
                var logo = document.querySelector(".logo");
                logo.addEventListener('click',function(){
                window.location.href="../main/index.php"
                })
        </script>       
            </div>
        </div>
        <div class="nav-address border">
            <p class="add-first">Deliver to</p>
            <div class="add-icon">
                <i class="fa-solid fa-location-dot"></i>
                <p class="add-second">Nepal</p>
            </div>
        </div>
        <div class="nav-search">
            <select class="Search-select">
                <option value="">All
                    <option value="">Fashion</option>
                    <option value="">Shoes</option>
                
                </option>
                
            </select>
            <input class="search-input" type="search" placeholder="Search for products and brands...">
            <div class="search-icon">
               <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>

        <div class="nav-sign-border">
           <button class="bb" onclick="myfunction()">Hello,sign in</butto></p>
            <p class="nav-second"><p1 id="m3">Account & Lists</p1></p>


</div>

        <div class="nav-return border">
            <p><span>Returns</span></p>
            <p class="nav-second"> & Order</p>
        </div>

        <div class="nav-cart border">
            <i class="fa-solid fa-cart-shopping"></i>
            Cart
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-all design">
            <i class="fa-solid fa-bars"></i> All
        </div>
        <div class="panel-opt">
            <p>Today's Deals</p>
            
            <p ><a href="../customercare/help.php">Customer Service</a></p>
            <p ><a href="../regPage/register.php">Register</a></p>
         
            <p>Gift Card</p>
            <p><a href="../seller/sreg.php">sell<a></p>

            <p> <a href="../sellerlogin/slogin.php">Seller Login </a> </p>
        </div>
        <div class="panel-deals">
            Shop deals in Electronics
        </div>
    </div>

    <script type="text/javascript">
            
            function myfunction(){
                var x =document.getElementById("sign");
                if(x.style.display==="none"){
                    x.style.display="block";
                }else{
                    x.style.display ="none";
                }
            }
        
    </script>
    <div id="sign" style="display: none;">
     <h2 class="hw">Welcome to dokan<h2>

        <button class="sup" ><a href="../login/loginn1.php">Sign up</a> </button>
        <br>
        
        <button class="sup" > <a href="../regPage/register.php">Create Account</a></button>
       
       <h4 class="h4"> <a href="../customercare/help.php">  need help?</a> </h4>
    </div>  

</header>


</body>
</html>