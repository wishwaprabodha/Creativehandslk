<?php
if (isset($_POST['type'])) {
    switch ($_POST['type']){
        case 'Cards':
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
            break;
        default:
            echo '';
            break;
    }
}
?>