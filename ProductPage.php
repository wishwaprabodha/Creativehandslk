<?php
session_start();
if (!isset($_SESSION["Uname"])) {
    $_SESSION["Uname"] = 'User';
}

if (!isset($_SESSION['productId'])) {
    $_SESSION['productId'] = null;
}

if (!isset($_SESSION['productName'])) {
    $_SESSION['productName'] = null;
}

if (!isset($_SESSION['productPrice'])) {
    $_SESSION['productPrice'] = null;
}
?>
<html>
<head>
    <title>productPage</title>

    <link rel="stylesheet" type="text/css" href="Semantic/semantic.min.css">
    <script src="./js/jquery.js"></script>
    <script src="./Semantic/semantic.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.dropdown').dropdown({
                transition: 'drop'
            });
        });
    </script>

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
    </style>

</head>
<body>
<header>
    <div class="ui grid">
        <div class="sixteen wide column">
            <div class="ui inverted secondary pointing fixed menu">
                <h3 class="item" style="color: black;font-family: cursive;font-style: inherit">CreativeHandslk</h3>
                <div class="right menu" style="padding-bottom: 10px;font-family:inherit">
                    <a class="item" href="HomePage.php">
                        Home
                    </a>
                    <a class="active item">
                        Products
                    </a>

                    <a class="item" href="ContactPage.php">
                        Contact
                    </a>

                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div style="background-image: url('./img/back2.PNG');  background-repeat: no-repeat;padding-left: 105px; height: 400px">

        <div class="ui  grid">

            <div class="row">
                <br>
            </div>

            <div class="sixteen wide column"></div>

            <div class="ten wide centered column">

                <div class="ui menu" id="selectionMenu">
                    <a class="item myClass">
                        Cards
                    </a>
                    <div class="ui pointing dropdown link item">
                        <span class="text">Gifts</span>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item">
                                <i class="dropdown icon"></i>
                                <span class="text">Family</span>
                                <div class="menu">
                                    <div class="item myClass">For Father</div>
                                    <div class="item myClass">For Mother</div>
                                    <div class="item myClass">For Sister</div>
                                    <div class="item myClass">For Brother</div>
                                    <div class="item myClass">For Grandma</div>
                                    <div class="item myClass">For Grandpa</div>
                                    <div class="item myClass">For Son</div>
                                    <div class="item myClass">For Daughter</div>
                                    <div class="item myClass">For Uncle</div>
                                </div>
                            </div>
                            <div class="item myClass">For Him</div>
                            <div class="item myClass">For Her</div>
                            <div class="item myClass">For Friend</div>
                            <div class="item myClass">For Teacher</div>
                        </div>
                    </div>
                    <div class="ui pointing dropdown link item">
                        <span class="text">Personalized Items</span>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item myClass">Clock</div>
                            <div class="item myClass">Pillow</div>
                            <div class="item myClass">Photo Frames</div>
                            <div class="item myClass">Wall Decorations</div>
                            <div class="item myClass">Plates</div>
                            <div class="item myClass">Mugs</div>
                            <div class="item myClass">T-Shirt</div>
                        </div>
                    </div>

                    <a class="item myClass">
                        Toys
                    </a>
                    <a class="item myClass">
                        Chocolate
                    </a>
                    <a class="item myClass">
                        Jewellary
                    </a>
                    <a class="item myClass">
                        Fancy Items
                    </a>
                    <a class="item myClass">
                        Flowers
                    </a>
                    <a class="item myClass">
                        Cake
                    </a>
                </div>


                <script>
                    $(document).ready(function () {
                        $("#selectionMenu .myClass").click(function () {
                            loadItems(this.innerText);
                        });
                    });
                    var loadItems = function (itemName) {
                        $.post('./loadData.php', {"type": itemName}, function (response) {
                            // Log the response to the console
                            $('#loadHere').html(response);
                        });
                    };
                </script>

            </div>
        </div>
    </div>

    <div style="padding-left: 85px">
        <div id="loadHere" style="padding-top: 50px; padding-bottom: 50px;"></div>
    </div>
</main>

<div class="ui inverted vertical footer segment">
    <br>
    <div class="ui center aligned container">
        <div class="ui stackable inverted divided grid">
            <div class="three wide column">
                <a class="ui inverted header" href="https://semantic-ui.com/elements/image.html"
                   style="font-size: 15px">Privacy Policy</a>
                <div class="ui inverted link list">

                </div>
            </div>
            <div class="three wide column">
                <a class="ui inverted header" href="https://semantic-ui.com/elements/image.html"
                   style="font-size: 15px">Delivary Policy</a>
                <div class="ui inverted link list">


                </div>
            </div>
            <div class="three wide column">
                <a class="ui inverted header" href="https://semantic-ui.com/elements/image.html"
                   style="font-size: 15px">Cancellation Policy</a>
                <div class="ui inverted link list">


                </div>
            </div>
            <div class="seven wide column">
                <h4 class="ui inverted header"> Designed & Developed by prOmiGO Pvt.Ltd</h4>
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
            <a class="item" href="#">Site Map</a>
            <a class="item" href="#">Contact Us</a>
            <a class="item" href="#">Terms and Conditions</a>
            <a class="item" href="#">Disclaimer</a>
        </div>
    </div>


</body>
</html>
