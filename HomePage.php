<?php
session_start();
if (!isset($_SESSION["Uname"])){
    $_SESSION["Uname"]='User';
}
?>
<html>
    <head>
        <title>welcomePage</title>

        <link rel="stylesheet" type="text/css" href="Semantic/semantic.min.css">
        <script src="./js/jquery.js"></script>
        <script src="./Semantic/semantic.min.js"></script>


        <script>
            $(document).ready(function () {

                $('.dropdown')
                        .dropdown({
                            // you can use any ui transition
                            transition: 'drop'
                        });

                $('.special.cards .image').dimmer({
                    on: 'hover'
                });

            });
        </script>


    </head>
    <body>
        <div class="ui grid">
            <div class="sixteen wide column">
                <div class="ui inverted secondary pointing fixed menu" >
                    <h3 class="item" style="color: wheat;font-family: cursive;font-style: inherit" >CreativeHandslk</h3>
                    <div class="right menu" style="padding-bottom: 10px;font-family:inherit">
                        <a class="active item">
                            Home
                        </a>
                        <a class="item" href="ProductPage.php">
                            Products
                        </a>
                    
                        <a class="item" href="ContactPage.php">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>




        <div style="background-image: url('./img/cr.PNG');  background-repeat: no-repeat; height: 400px">
            <div class="ui four column grid">
                <div class="row">
                    <br>  <br>
                </div>
                <div class="right floated center aligned column" style="padding-right: 40px">
                    <button class="ui icon button">
                        <a href="Login.php"> <i class="icon user"></i>
                            Login</a>
                    </button>
                    <div class="ui large label" style="width: 120px;height: 35px">Hi <?php echo $_SESSION['Uname']; ?> !</div>
                    <div class="row"></div>

                </div>
            </div>
            <div class="ui two column centered grid">
                <div class="column">
                    <h1 style="padding-top: 100px; color: whitesmoke ; font-size: 60px; font-family: 'Vladimir Script'">Sometimes Elegance Means Simple</h1>

                    <div class="ui two column centered grid">


                    </div>
                </div>

            </div>
        </div>

        <div style="background-color: wheat; height: 700px;padding-left: 85px" >


            <div class="ui grid">
                <div class="ui two wide centered column">
                    <div class="row"></div> <br><br>
                    <div class="row"></div>
                    <h2 style="color: black; font-family: cursive;font-size:20px" >Best Sellers</h2>
                    <br>
                </div>

                <div class="row"></div>
            </div>


            <div class="centered ui grid">

                <div class="ui special cards">



                    <div class="card" style="height: 200px; width: 200px">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">For Him</div>
                                    </div>
                                </div>
                            </div>
                            <img src="./img/house.PNG" >
                        </div>
                        <div class="content">
                            <a class="header">Clay House</a>
                            <div class="meta">
                                <span class="date">Rs.300</span>
                            </div>
                        </div>
                    </div>



                    <div class="card" style="height: 200px; width: 200px">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Decor</div>
                                    </div>
                                </div>
                            </div>
                            <img src="./img/table.png">
                        </div>
                        <div class="content">
                            <a class="header">Table decor </a>
                            <div class="meta">
                                <span class="date">Rs.150</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="height: 200px; width: 200px">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Crafts</div>
                                    </div>
                                </div>
                            </div>
                            <img src="./img/basket.png">
                        </div>
                        <div class="content">
                            <a class="header">Paper Basket </a>
                            <div class="meta">
                                <span class="date">Rs.250</span>
                            </div>
                        </div>
                    </div>


                    <div class="card" style="height: 200px; width: 200px">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">For Her</div>
                                    </div>
                                </div>
                            </div>
                            <img src="./img/wall.PNG" >
                        </div>
                        <div class="content">
                            <a class="header">Wall Decor</a>
                            <div class="meta">
                                <span class="date">Rs.200</span>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>


<div class="ui inverted vertical footer segment">
    <br>
    <div class="ui center aligned container">
        <div class="ui stackable inverted divided grid">
            <div class="three wide column">
                <a class="ui inverted header" href="https://semantic-ui.com/elements/image.html" style="font-size: 15px">Privacy Policy</a>
                <div class="ui inverted link list">

                </div>
            </div>
            <div class="three wide column">
                <a class="ui inverted header" href="https://semantic-ui.com/elements/image.html" style="font-size: 15px">Delivery Policy</a>
                <div class="ui inverted link list">


                </div>
            </div>
            <div class="three wide column">
                <a class="ui inverted header" href="https://semantic-ui.com/elements/image.html" style="font-size: 15px">Cancellation Policy</a>
                <div class="ui inverted link list">


                </div>
            </div>
            <div class="seven wide column">
                <h4 class="ui inverted header" > Designed & Developed by prOmiGO Pvt.Ltd</h4>
                <p>Copyright © 2016-2017 CreativeHandslk.com. All Rights Reserved.</p>
            </div>
        </div>
        <div class="ui inverted section divider"></div>

        <div class="icon">
            <a> <i class="facebook icon" href="https://www.facebook.com"></i> </a>
            <a><i class="google plus icon" href=" https://plus.google.com"></i></a>
            <a> <i class="github icon" href="https://github.com"></i></a>
        </div>


        <div class="ui horizontal inverted small divided link list">
            <i class="item" href="#">Site Map</i>
            <i class="item" href="#">Contact Us</i>
            <i class="item" href="#">Terms and Conditions</i>
            <i class="item" href="#">Disclaimer</i>
        </div>
    </div>
</div>
</body>
</html>


