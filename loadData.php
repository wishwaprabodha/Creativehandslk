<?php
session_start();
if (!isset($_SESSION['productId'])){
    $_SESSION['productId']=null;
}

if (!isset($_SESSION['productName'])){
    $_SESSION['productName']=null;
}

if (!isset($_SESSION['productPrice'])){
    $_SESSION['productPrice']=null;
}


class loadData{


    static $url = "localhost";
    static $username = "root";
    static $password = "";
    static $db = "creativehands";
    public static $key;



    public static function connect(): mysqli
    {
        $conn = new mysqli(loadData::$url, loadData::$username, loadData::$password, loadData::$db) or die("Not Connected!");
        return $conn;
    }

    public function getCards(){

        $key = $_POST['type'];
        $html='
                <div class="four column centered ui grid" style="padding-left: 200px; padding-right: 200px;">
            ';

        if (!empty($key)) {
            $sqlCards = "SELECT * FROM product WHERE catagoryA='$key' OR catagoryB='$key' OR catagoryC='$key';";
            try {
                $conn = loadData::connect();
                $result = mysqli_query($conn, $sqlCards);
                if ($result) {
                    echo "<script> alert('Results Found');</script>";
                }
            } catch (Exception $ex) {
                echo "echo 'Message: ' .$ex->getMessage();";
            }
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['productId'] = $row['productId'];
                    $_SESSION['productName']=$row['productName'];
                    $_SESSION['productPrice']=$row['productPrice'];


                        $html = $html . '
                    <div class="column">
                    <div class="ui special cards">
                        <div class="card" style="height: 200px; width: 200px">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Rs. 150</div>
                                    </div>
                                </div>
                            </div>
                            <img src="./img/1.PNG" >
                        </div>
                        <div class="content">
                            <a class="header">Gift Card</a>
                      
                        </div>
                    </div>
                    </div>
                    </div>
                ';

                }

                $html = $html . '
                </div>
                <script>
                    $(\'.special.cards .image\').dimmer({
                        on: \'hover\'
                    });
                </script>
            ';
                echo $html;

            } else {
                echo "<script>alert('No Product Found')</script>";
            }
            mysqli_close($conn);
        }
    }

   /*
    *  public function loadCards(){

        if (isset($_POST['type'])) {

                    $html='
                <div class="four column centered ui grid" style="padding-left: 200px; padding-right: 200px;">
            ';

                    for ($i=0; $i<40; $i++){
                        $html = $html . '
                    <div class="column">
                    <div class="ui special cards">
                        <div class="card" style="height: 200px; width: 200px">
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button">Rs.300</div>
                                    </div>
                                </div>
                            </div>
                            <img src="./img/house.PNG" >
                        </div>
                        <div class="content">
                            <a class="header">Clay House</a>

                        </div>
                    </div>
                    </div>
                    </div>
                ';
                    }

                    $html = $html . '
                </div>
                <script>
                    $(\'.special.cards .image\').dimmer({
                        on: \'hover\'
                    });
                </script>
            ';
                    echo $html;


        }
    }
    * */


}

$obj=new loadData();
$obj->getCards();


?>