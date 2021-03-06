<?php
    session_start();
if (!isset($_SESSION["Uname"])){
    $_SESSION["Uname"]='User';
}

if (!isset($_SESSION["Uaccess"])){
    $_SESSION["Uaccess"]=0;
}

?>

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

<div style="background-image: url('./img/logSc.PNG');  background-repeat: no-repeat; height: 100%; background-size: auto 100%;background-attachment: fixed">

    <div class="ui grid">

        <div class="sixteen wide column">
            <div class="ui inverted secondary pointing fixed menu">
                <h3 class="item" style="color: wheat;font-family: cursive;font-style: inherit">CreativeHandslk</h3>
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


                    <a class="item" <?php if($_SESSION['Uaccess']==1){ echo 'href="addProduct.php"';} ?>>
                        Add Products
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="ui grid">

        <div class="ui vertical divider">
            Or
        </div>

        <div class="two column row">

            <div class="left floated column" style="padding-right: 100px">
                <br><br><br>

                <form class="ui form" id="f1" action="" method="POST" style="padding-left: 40px">


                    <div class="field">
                        <label style="color: white">First Name</label>
                        <input type="text" name="name" placeholder="Name" required="">
                    </div>

                    <div class="field">
                        <label style="color: white">Address</label>
                        <input type="text" name="address" placeholder="Address" required="">
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label style="color: white">Contact Number</label>
                            <input type="text" name="contactno" placeholder="Contact Number" required="">
                        </div>
                        <div class="field">
                            <label style="color: white">Email</label>
                            <input type="text" name="email" placeholder="Email" required="">
                        </div>
                    </div>

                    <div class="three fields">
                        <div class="field">
                            <label style="color: white">Username</label>
                            <input type="text" name="username" placeholder="Username" required="">
                        </div>
                        <div class="field">
                            <label style="color: white">Password</label>
                            <input type="password" name="password" placeholder="Password" required="">
                        </div>
                        <div class="field">
                            <label style="color: white">Confirm Password</label>
                            <input type="password" name="password2" placeholder="Confirm Password" required="">
                        </div>
                    </div>

                    <div class="inline fields">
                        <label for="gender" style="color: white">Gender:</label>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="gender" value="Male" checked="" tabindex="0" class="hidden">
                                <label style="color: white">Male</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" name="gender" value="Female" tabindex="0" class="hidden">
                                <label style="color: white">Female</label>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="terms" value="1" tabindex="0" class="hidden">
                            <label style="color: white">I agree to the Terms and Conditions</label>
                        </div>
                    </div>

                    <button class="ui button" name="user" type="submit" value="sub">Submit</button>
                    <button class="ui button" name="user" type="submit" value="update">Update</button>

                </form>


            </div>

            <div class="right floated four wide column" style="padding-right: 50px">


                <br><br><br>


                <div class="ui large label" style="width: 100px;height: 35px">Hi <?php echo $_SESSION['Uname']; ?>!</div>


                <br><br><br>

                <form class="ui form" id="f2" action="" method="POST">
                    <div class="field">
                        <label style="color: white">Username</label>
                        <div class="ui left icon input">
                            <input type="text" name="logUsername" placeholder="Username">
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <label style="color: white">Password</label>
                        <div class="ui left icon input">
                            <input type="password" name="logPassword" placeholder="Password">
                            <i class="lock icon"></i>
                        </div>
                    </div>
                    <button class="ui button" name="log" type="submit" value="login">Login</button>
                    <button class="ui button" name="logout" type="submit" value="logout">Logout</button>
                </form>
            </div>

        </div>


    </div>

</div>




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
            <i class="item" href="#">Site Map</i>
            <i class="item" href="#">Contact Us</i>
            <i class="item" href="#">Terms and Conditions</i>
            <i class="item" href="#">Disclaimer</i>
        </div>
    </div>
</div>


</body>
</html>


<?php

class userData
{


    public static $nameLogged = "User!";
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

    public function addUser()
    {

        if (!empty($_POST['user'])) {
            switch ($_REQUEST['user']) {

                case 'sub':
                    $userId = 0;
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
                    }
                     else {

                        $sqlInsert = "INSERT INTO user(userName,userGender,userAddress,userEmail,userContact,userLogin,userPassword) VALUES('$userName','$userGender','$userAddress','$userEmail',$userContact,'$userLogin','$userPassword');";
                        $conn = userData::connect();
                        if (mysqli_query($conn, $sqlInsert)) {
                            echo "<script>alert('User Added!')</script>";
                        }
                    }
                    break;

                case 'update':

                    /* Not implemented
                         *   Can be implemented by using user login id,db values can set to input fields. And by altering them User details can be updated
                    */

                    break;
            }
        }
    }

    public static function connect(): mysqli
    {
        $conn = new mysqli(userData::$url, userData::$username, userData::$password, userData::$db) or die("Not Connected!");
        return $conn;
    }

    public function logout(){
        $_SESSION['Uname']="User";
        $_SESSION['Uid']=0;
        $_SESSION['Uaccess']=0;

    }

    public function loginAction(){
        $logUser = $_POST["logUsername"];
        $logPassword = $_POST["logPassword"];
        if (!empty($_POST['log'])) {
            $sqlLogin = "SELECT * FROM user WHERE userLogin='$logUser' AND userPassword='$logPassword';";
            try {
                $conn = userData::connect();
                $result = mysqli_query($conn, $sqlLogin);
                if ($result) {
                    echo "Query Executed!<br>";
                }
            } catch (Exception $ex) {
                echo "echo 'Message: ' .$ex->getMessage();";
            }
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $nameLogged = $row['userLogin'];
                    $_SESSION['Uid']=$row["userId"];
                    $_SESSION['Uaccess']=$row["userAccess"];
                    $_SESSION['Uname'] = $nameLogged;
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

if (isset($_POST['user'])) {

    $obj->addUser();
}

if (isset($_POST['log'])) {

    $obj->loginAction();
}

if (isset($_POST['logout'])) {

    $obj->logout();
}

?>

