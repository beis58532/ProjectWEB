<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Beis</title>
</head>
<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <img src="./img/sneakers.png" alt="">
            </div>
            <div class="navItem">
                <div class="search">
                    <input type="text" placeholder="Search..." class="searchInput">
                    <img src="./img/img/search.png" width="20" height="20" alt="" class="searchIcon">
                </div>
            </div>
            <div class="navItem">
                <?php
                    if (isset($_SESSION["userid"])){
                ?>
                    <li><a href="#"><?php echo $_SESSION["useruid"];?></a></li>
                    <li><a href="./includes/./logout-inc.php" class="header-login-a">Logout</a></li>
                <?php
                    }
                    else{
                ?>
                        <li><a href="#">Sign UP</a></li>
                        <li><a href="#"class="header-login-a">LOGIN</a></li>
                <?php
                    }
                ?>

            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem">Iphone 14</h3>
            <h3 class="menuItem">Iphone 14 pro</h3>
            <h3 class="menuItem">Samsung S22 Ultra</h3>
            <h3 class="menuItem">Google Pixel</h3>
            <h3 class="menuItem">Nothing Phone</h3>
        </div>
    </nav>
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./img/img/i14/hero_all_colors__dvlwc1u257qu_large.jpg" width="690px" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Iphone 14</br> </br></h1>
                <h2 class="sliderPrice">Prej $799</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/img/i14pro/iPhone-14-Pro-and-14-Pro-Max.png" width="690px" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Iphone 14 pro</br> </br> </h1>
                <h2 class="sliderPrice">prej $1199</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/img/s22/lineup.jpg" width="42%" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Samsung s22</br> </br> </h1>
                <h2 class="sliderPrice">prej $1299</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/img/pixel/Google-Pixel-7-Lineup.webp" alt="" width="500px" height="420px" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Pixel</br> </br> </h1>
                <h2 class="sliderPrice">prej $789</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/img/nothing/White.webp"  width="30%" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Nothing</br> </br> </h1>
                <h2 class="sliderPrice">prej $450</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
        </div>
    </div>

    <div class="product" id="product">
        <img src="./img/img/i14/0 (1).jpg" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">Iphone 14</h1>
            <h2 class="productPrice">prej 799$</h2>
            <p class="productDesc"></p>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size">128 gb</div>
                <div class="size">256 gb</div>
                <div class="size">512 gb</div>
            </div>
            <button class="productButton"><a href="">BUY NOW!</button>
        </div>
        <div class="payment">
            <h1 class="payTitle">Personal Information</h1>
            <label>Name and Surname</label>
            <input type="text" placeholder="Emri Mbiemri" class="payInput" id="emrimbiemri">
            <label>Phone Number</label>
            <input type="text" placeholder="+383 44 *** ***" class="payInput" id="nrtelit">
            <label>Address</label>
            <input type="text" placeholder="UBT-Dukagjini" class="payInput" id="adresa">
            <h1 class="payTitle">Card Information</h1>
            <div class="cardIcons">
                <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                <img src="./img/master.png" alt="" width="40" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Card Number" id="cardnumber">
            <div class="cardInfo">
                <input type="date" placeholder="mm" class="payInput sm" id="dataSkadimit">
                <h4>Data e sakadimit </h4>
            </div>
            <button class="payButton">Vazhdo</button>
            <span class="close">X</span>
            <button onclick="validoInput()">Regjistrohu</button>
        </div>
    </div>
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Apple</h1>
            <img src="./img/img/applelogo.png"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Google</h1><br><br><br><br><br><br>
            <img src="./img/img/googlelogo2.png"
                alt="" class="galleryImg">

        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Samsung</h1><br><br><br><br><br><br><br><br>
            <img src="./img/img/samsunglogo.png"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
                
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm"></h3>
            <h1 class="nsTitle"></h1>
            <h1 class="nsTitle"></h1>
            <a href="#nav">
                <button class="nsButton">Kthehu lart</button>
            </a>
        </div>
        
    </div>
    <section class="index-login">
        <link rel="stylesheet" href="./css/login.css">
        <div class="wrapper">
            <div class="index-login-singup">
                <h4>SIGN UP</h4>
                <p>Nuk keni ndonje user. Regjistrohu ketu</p>
                <form action="includes/signup-inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username"><br><br>
                    <input type="password" name="pwd" placeholder="Password"><br><br>
                    <input type="password" name="pwdRepeat" placeholder="Perserit-Password"><br><br>
                    <input type="email" name="email" placeholder="Email"><br><br>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>SIGN IN</h4>
                <p>Nese keni user vazhdoni ketu</p>
                <form action="includes/login-inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username"><br><br>
                    <input type="password" name="pwd" placeholder="Password"><br>
                    <button type="submit" name="submit">Sign in</button>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="footerLeft">
            <div class="footerMenu"><link rel="stylesheet" href="./css/footer1.css">
                <ul class="fList">
                    <button class="buttonKlas"style="border-radius: 10px;background-color: aqua" ><a href="AboutUs.php"><h2 class="fMenuTitle">About Us</h2></a></button><br>
                    <button class="buttonKlas"style="border-radius: 10px;background-color: aqua"><a href="ContactUs.php"><h2 class="fMenuTitle">Kontakto</h2></a></button>
                    <li class="fListItem">Contact Number: +383 45 886 361</li>
                    <form action="https://www.google.com/maps/place/Dukagjini+Construction/@42.6535955,21.145181,17z/data=!3m1!4b1!4m5!3m4!1s0x13549ef40ea71ce1:0xcb5551aeb28ad0de!8m2!3d42.6535955!4d21.1473697">
                        <input type="submit" value="Lokacioni" />
                    </form>
                    <button class="fListItem" id="aboutUs"img src="./img/img/applelogo.png"></button>
                </ul>
            </div>

            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <li class="fListItem" onclick="">Iphone 14</li>
                    <li class="fListItem">Iphone 14 pro</li>
                    <li class="fListItem">Samsung s22</li>
                    <li class="fListItem">Google Pixel</li>
                    <li class="fListItem">Nothing Phone</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">UBT</h1>

            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                    <img src="./img/img/socials/facebook.png" alt="" class="fIcon">
                    <img src="./img/img/socials/twitter.png" alt="" class="fIcon">
                    <img src="./img/img/socials/instagram.png" alt="" class="fIcon">
                    <img src="./img/img/socials/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">@Beis Lushta. 2023.</span>
            </div>
        </div>
    </footer>
    <script src="js/app.js"></script>
</body>

</html>

