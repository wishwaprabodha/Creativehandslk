<html>

<head>
    <title>productPage</title>

    <link rel="stylesheet" type="text/css" href="Semantic/semantic.min.css">
    <script src="./js/jquery.js"></script>
    <script src="./Semantic/semantic.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.dropdown')
                .dropdown({
                    // you can use any ui transition
                    transition: 'drop'
                })
            ;
        });
    </script>

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


    <div class="ui inverted secondary pointing fixed menu">
    <h3 class="item" style="color: black;font-family: cursive;font-style: inherit" >CreativeHandslk</h3>
    <div class="right menu" style="padding-bottom: 10px;font-family:inherit">
        <a class="item" href="HomePage.php">
            Home
        </a>
        <a class="active item" >
            Products
        </a>

        <a class="item" href="ContactPage.php">
            Contact
        </a>

  </div>
    </div>
    </div>
</div>




    <div style="background-image: url('./img/back2.PNG');  background-repeat: no-repeat;padding-left: 105px; height: 400px">
        <div class="ui  grid">

            <div class="row">
                <br>
            </div>

            <div class="sixteen wide column"></div>

            <div class="ten wide centered column">

                <div class="ui  menu">
                    <a class="item">
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
                                    <div class="item">For Father</div>
                                    <div class="item">For Mother</div>
                                    <div class="item">For Sister</div>
                                    <div class="item">For Brother</div>
                                    <div class="item">For Grandma</div>
                                    <div class="item">For Grandpa</div>
                                    <div class="item">For Son</div>
                                    <div class="item">For Daughter</div>
                                    <div class="item">For Uncle</div>
                                </div>
                            </div>
                            <div class="item">For Him</div>
                            <div class="item">For Her</div>
                            <div class="item">For Friend</div>
                            <div class="item">For Teacher</div>
                        </div>
                    </div>
                    <div class="ui pointing dropdown link item">
                        <span class="text">Personalized Items</span>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item">Clock</div>
                            <div class="item">Pillow</div>
                            <div class="item">Photo Frames</div>
                            <div class="item">Wall Decorations</div>
                            <div class="item">Plates</div>
                            <div class="item">Mugs</div>
                            <div class="item">T-Shirt</div>
                        </div>
                    </div>
                    
                    <a class="item">
                        Toys
                    </a>
                    <a class="item">
                        Chocolate
                    </a>
                    <a class="item">
                        Jewellary
                    </a>
                    <a class="item">
                        Fancy Items
                    </a>
                    <a class="item">
                       Flowers
                    </a>
                    <a class="item">
                        Cake
                    </a>
                </div>

                </div>
        </div>



        <div class="sixteen column centered ui grid">
           <?php for ($i=0;$i<3;$i++){
            echo ' <div class="row"></div>
                
                
      

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

           
          ';}?>
        </div>
    </div>


    <div style="background-color: #e57373; height: 700px;padding-left: 85px" >
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
                <a class="ui inverted header" href="https://semantic-ui.com/elements/image.html" style="font-size: 15px">Delivary Policy</a>
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
            <i class="facebook icon" href="https://www.facebook.com/wishwa.prabodha"></i>
            <i class="google plus icon" href=" https://plus.google.com/u/0/109869121768945903903"></i>
            <i class="github icon" href="https://github.com/wishwaprabodha"></i>
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
