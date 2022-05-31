<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style0.css">
</head>

<body>
    <div class="header">
        <div class="navbar">
            <nav>
                <ul id="menu_items">
                    <li><a href=""> Home <a> </li>
                    <li> <a href="product.php"> Products</a> </li>
                    <li><a href="contact.html"> Contact</a> </li>
                    <li><a href="login.php"> Log out </a> </li>
                    <ul>
            </nav>
            <img src="menu.png" width="28px" height="20px" class="menu_icon" onclick="menu_toggle()">
        </div>


        <div class="welcome">
            <?php
                session_start();
                echo "Welcome ".$_SESSION['username']."!"; 
                ?>
        </div>

        <div class="row">
            <div class="col-2">
                <h1> Give Your Workout <br> A New Style!</h1>
                <p> Success isn't always about greatness. It's about consistency. Consistent <br> hard work gains
                    Success. greatness will come.</p>
                <a href="#catego" class="btn">Explore Now &#10132; </a>
            </div>



            <div class="col-2">
                <img src="image1.png">
            </div>
        </div>
    </div>

    <div class="categories" id="catego">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="image2.png">
                </div>

                <div class="col-3">
                    <img src="image3.png">
                </div>

                <div class="col-3">
                    <img src="image13.png">
                </div>
            </div>
        </div>
    </div>


    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="image4.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>price:300TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>
            <div class="col-4">
                <img src="image5.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>price:350TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>
            <div class="col-4">
                <img src="image6.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>price:400TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>

        </div>


        <h2 class="title"> Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="image7.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>price:450TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>
            <div class="col-4">
                <img src="image8.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>price:300TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>
            <div class="col-4">
                <img src="image9.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>price:350TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>
            <div class="col-4">
                <img src="image10.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>price:400TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>
            <div class="col-4">
                <img src="image11.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>price:450TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>
            <div class="col-4">
                <img src="image12.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>price:300TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>
            <div class="col-4">
                <img src="image13.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>price:350TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>
            <div class="col-4">
                <img src="image3.png">
                <h4>White printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>price:400TK</p>
                <p>code: fhj6fg</p>
                <a href="payment.php" class="btn">Buy</a>
            </div>
        </div>
    </div>





    <!-- ----------------------Footer-------------------------- -->


    <div class="footer">
        <div class="row">
            <div class="footer-colum1">
                <h2>Download Our App </h2>
                <div class="app-link">
                    <a href="https://play.google.com/store/apps"><img src="play-store.png"></a>
                    <a href="https://www.apple.com/app-store/"><img src="app-store.png"></a>
                </div>

            </div>
            <div class="footer-colum2">
                <h2>Useful Links </h2>
                <ul>
                    <li>Coupons</li>
                    <li>Blog post</li>
                    <li>Returns policys</li>
                    <li>Join affiliate</li>
                </ul>
            </div>
            <div class="footer-colum3">
                <h2>Follow Us </h2>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>

        <hr>
        <p class="copy-right">&#169;Copyright 2022</p>

    </div>


    <!-- ----------------------------------------js------------------------ -->



    <script>
        var menu_icon = document.getElementById("menu_items");
        menu_icon.style.maxHeight = "0px";

        function menu_toggle() {
            if (menu_icon.style.maxHeight == "0px") {
                menu_icon.style.maxHeight = "200px";
            } else {
                menu_icon.style.maxHeight = "0px";
            }
        }
    </script>






</body>

</html>