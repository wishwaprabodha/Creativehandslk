<html>

<head>
    <title>loginPage</title>

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

            $('.ui.checkbox')
                .checkbox();


            $('.ui.radio.checkbox')
                .checkbox();

        });



    </script>

</head>
<body>

<div style="background-image: url('./img/logSc.PNG');  background-repeat: no-repeat; height: 400px">
                                
    <div class="ui grid">

        <div class="sixteen wide column">
            <div class="ui inverted secondary pointing fixed menu" >
                <h3 class="item" style="color: wheat;font-family: cursive;font-style: inherit" >CreativeHandslk</h3>
                <div class="right menu" style="padding-bottom: 10px;font-family:inherit">
                    <a class="item" href="HomePage.php">
                        Home
                    </a>
                    <a class="item" href="ProductPage.php">
                        Products
                    </a>
                  
                    <a class="item" href="ContactPage.php">
                        Contact
                    </a>


                    <a class="item" href="addProduct.php">
                        Add Products
                    </a>
                </div>
            </div>
        </div>
    </div>



        <div class="ui grid">

            <div class="ui vertical divider" style="background-position:center">
                Or
            </div>

        <div class="two column row">

            <div class="left floated column">
                <br><br><br>

                <form class="ui form" id="f1" action="" method="POST" style="padding-left: 40px">

                    
                    <div class="field">
                        <label>First Name</label>
                        <input type="text" name="name" placeholder="Name" required="">
                    </div>
                       
                    <div class="field">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Address" required="">
                    </div>
                    <div class="two fields">
                    <div class="field">
                        <label>Contact Number</label>
                        <input type="text" name="contactno" placeholder="Contact Number" required="">
                    </div>
                        <div class="field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Email" required="">
                        </div>
                    </div>

                    <div class="three fields">
                        <div class="field">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Username" required="">
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" required="">
                        </div>
                        <div class="field">
                            <label>Confirm Password</label>
                            <input type="password" name="password2" placeholder="Confirm Password" required="">
                        </div>
                    </div>

                    <div class="inline fields">
                        <label for="gender">Gender:</label>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="gender" value="Male" checked="" tabindex="0" class="hidden">
                                <label>Male</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="gender" value="Female" tabindex="0" class="hidden">
                                <label>Female</label>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="terms" value="1" tabindex="0" class="hidden">
                            <label>I agree to the Terms and Conditions</label>
                        </div>
                    </div>

                    <button class="ui button" name="user" type="submit" value="submit">Submit</button>
                    <button class="ui button" name="user" type="submit" value="update">Update</button>

                </form>



            </div>


        <div class="right floated four wide column" style="padding-right: 50px">

            <br><br><br>

            <form class="ui form" id="f2" action="" method="POST">
                <div class="field">
                    <label>Username</label>
                    <div class="ui left icon input">
                        <input type="text" name="logUsername" placeholder="Username">
                        <i class="user icon"></i>
                    </div>
                </div>
                <div class="field">
                    <label>Password</label>
                    <div class="ui left icon input">
                        <input type="password" name="logPassword" placeholder="Password">
                        <i class="lock icon"></i>
                    </div>
                </div>
                <button class="ui button" name="log" type="submit" value="login">Login</button>
            </form>
        </div>

        </div>


        </div>

    </div>

<div style="background-color: wheat; height: 700px;padding-left: 85px" ></div>


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
</div>


</body>
</html>




<?php


session_start();

class userData {

    //var $userId=1;
    static $nameLogged;
    static $url = "localhost";
    static $username = "root";
    static $password = "";
    static $db = "creativehands";

    public static function connect(): mysqli {
        $conn = new mysqli(userData::$url, userData::$username, userData::$password, userData::$db) or die("Not Connected!");
        return $conn;
    }

    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function addUser() {

        if (!empty($_POST['user'])) {
            switch ($_REQUEST['user']) {

                case 'submit':
                    $userId=0;
                    $userName = $_POST["name"];
                    $userGender = $_POST["gender"];
                    $userAddress = $_POST["address"];
                    $userEmail = $_POST["email"];
                    $userContact = $_POST["contactno"];
                    $userLogin = $_POST["username"];
                    $userPassword = $_POST["password"];
                    $userCpassword = $_POST["password2"];

                    if (strcmp($userPassword, $userCpassword) != 0) {
                        echo "<script>alert('Password does not match!')</script>";
                    } elseif ($_POST["terms"] == 0) {
                        echo "<script>alert('Accept Terms and Conditions to Continue!')</script>";
                    } else {

                        $sqlInsert = "INSERT INTO user(userName,userGender,userAddress,userEmail,userContact,userLogin,userPassword) VALUES('$userName','$userGender','$userAddress','$userEmail',$userContact,'$userLogin','$userPassword');";
                        $conn = userData::connect();
                        if (mysqli_query($conn, $sqlInsert)) {
                            echo "Query Executed!<br>";
                            echo "$sqlInsert";
                        }
                    }
                    break;

                case 'update':
                   // $sqlInsert = "INSERT INTO user VALUES($userId,'$userName','$userGender','$userAddress','$userEmail',$userContact,'$userLogin','$userPassword');";



                    break;
            }
        }
    }

    public function loginAction() {

        $logUser = $_POST["logUsername"];
        $logPassword = $_POST["logPassword"];


        if (!empty($_POST['log'])) {
            //echo "gdfgdgdgdfgd";
            $sqlLogin = "SELECT * FROM user WHERE userLogin='$logUser' AND userPassword='$logPassword';";

            try {
                $conn = userData::connect();
                $result=mysqli_query($conn, $sqlLogin);
                if ($result) {
                    echo "Query Executed!<br>";
                    echo "$sqlLogin";
                }
            } catch (Exception $ex) {
                echo "echo 'Message: ' .$ex->getMessage();";
            }

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $nameLogged = $row["userLogin"];
                    $_SESSION["loggedName"] = $nameLogged;
                    echo "username is .$nameLogged";
                }
            } else {
                echo "<script>alert('Username/Password is incorrect!')</script>";
            }

            mysqli_close($conn);
        }
    }

}

$obj = new userData();
$obj->connect();
$obj->addUser();
$obj->loginAction();
?>

