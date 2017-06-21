


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
                            <input type="text" name="catB" placeholder="Catagory B" required="">
                        </div>
                        <div class="field">
                            <label>Catagory C</label>
                            <input type="text" name="catC" placeholder="Catagory C" required="">
                        </div>
                    </div>

                    <br>

                    <button class="ui button" name="product" type="submit" value="sub">Submit</button>
                    <button class="ui button" name="product" type="submit" value="update">Update</button>
                    <button class="ui button" name="product" type="submit" value="search">Search</button>

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


</body>
</html>

<?php

class productData
{

    static $url = "localhost";
    static $username = "root";
    static $password = "";
    static $db = "creativehands";

    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function addProduct()
    {
            switch ($_REQUEST['product']) {

                case 'sub':

                    $productName = $_POST["pname"];
                    $productPrice = $_POST["price"];
                    $productcatA = $_POST["catA"];
                    $productcatB = $_POST["catB"];
                    $productcatC = $_POST["catC"];



                        $sqlInsert = "INSERT INTO product(productName,productPrice,catagoryA,catagoryB,catagoryC) VALUES('$productName',$productPrice,'$productcatA','$productcatB','$productcatC');";



                    try {
                        $conn = productData::connect();
                        $result=mysqli_query($conn, $sqlInsert);
                        if ($result) {
                            echo "Query Executed!<br>";
                        }
                    } catch (Exception $ex) {
                        echo "echo 'Message: ' .$ex->getMessage();";
                    }


                        if ($result) {
                            echo "<script>alert('Product Added!')</script>";
                        }
                    break;

                case 'update':

                    /* Not implemented
                         *   Can be implemented by using product id,db values can set to input fields. And by altering them User details can be updated
                    */

                    break;
            }

    }

    public static function connect(): mysqli
    {
        $conn = new mysqli(productData::$url, productData::$username, productData::$password, productData::$db) or die("Not Connected!");
        return $conn;
    }


}

$obj = new productData();

$obj->connect();


        if (isset($_POST['product'])) {

            switch ($_REQUEST['product']) {

                case 'sub':

                    $obj->addProduct();

                    break;
            }

}

?>





