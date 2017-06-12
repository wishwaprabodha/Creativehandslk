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
                    $userId;
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
                    $sqlInsert = "INSERT INTO user VALUES($userId,'$userName','$userGender','$userAddress','$userEmail',$userContact,'$userLogin','$userPassword');";



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



