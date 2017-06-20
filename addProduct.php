


<html>

<head>
    <title>contactPage</title>

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


        <div class="ui secondary pointing fixed menu">
            <h3 class="item" style="color: wheat;font-family: cursive;font-style: inherit" >CreativeHandslk</h3>
            <div class="right menu" style="padding-bottom: 10px;font-family:inherit">
                <a class="item" href="HomePage.php" ">
                    Home
                </a>
                <a class="item" href="ProductPage.php" ">
                    Products
                </a>

                <a class="item" href="ContactPage.php" ">
                    Contact
                </a>

                <a class="active item ">
                Add Product
                </a>

            </div>
        </div>
    </div>
</div>




<div style="background-image: url('./img/contact.PNG');  background-repeat: no-repeat;padding-left: 105px; height: 800px">

    <div class="ui grid">


        <div class="one column row">


            <div class="column">
                <br><br><br>

                <form class="ui form" id="f1" action="" method="POST" style="padding-left: 20px;padding-right: 140px">

                    <div class="two fields">
                        <div class="field">
                            <label>Product Name</label>
                            <input type="text" name="pname" placeholder="Product Name" required="">
                        </div>
                        <div class="field">
                            <label>Product Price</label>
                            <input type="text" name="price" placeholder="Product Price" required="">
                        </div>
                    </div>

                    <div class="three fields">
                        <div class="field">
                            <label>Catagory A</label>
                            <input type="text" name="catA" placeholder="Catagory A" required="">
                        </div>
                        <div class="field">
                            <label>Catagory B</label>
                            <input type="password" name="catB" placeholder="Catagory B" required="">
                        </div>
                        <div class="field">
                            <label>Catagory C</label>
                            <input type="password" name="catC" placeholder="Catagory C" required="">
                        </div>
                    </div>

                    <br>

                    <button class="ui button" name="user" type="submit" value="submit">Submit</button>
                    <button class="ui button" name="user" type="submit" value="update">Update</button>
                    <button class="ui button" name="user" type="submit" value="update">Search</button>

                </form>



            </div>

            <div class="row"></div>
            <br><br><br>



        </div>


    </div>



</div>




<div style="background-color: #0e8c8c; height: 400px;padding-left: 85px" >
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







<?php
/**
 * Created by PhpStorm.
 * User: Wishwa Prabodha
 * Date: 15/06/2017
 * Time: 09:12
 */

