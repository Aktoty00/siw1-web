<!DOCTYPE html>
<html>
    <head> 
        <title>Ushatava</title>
        <link rel="stylesheet" href="item.css">
        <link rel="shortcut icon" href="assets/logo.jpg" type="image/x-icon">
    </head> 
    <body>
        <header class="window-header d-flex" style="margin-bottom: 16px">
            <a class="link" href="catalog.php">Catalog<a>
            <a class="link" href="index.php">USHATÁVA<a>
            <a class="link" href="about-us.php">About us<a>
        </header>
        <div class="window-body">
        <!-- <button type="button" onclick="history.back();">Back</button> -->
        <input type="image" id="go-back" src="assets/goback.png" onclick="history.back();" width="20" height="30px">
            <?php
            $array = array(
                array(
                    'path' => 'num1',
                    'name' => 'Шуба мини (песочный)',
                    'cost' => '23 900 RUB'
                ),
                array(
                    'path' => 'num2',
                    'name' => 'Юбка с разрезом вязаная (черный)',
                    'cost' => '5 100 RUB'
                ),
                array(
                    'path' => 'num3',
                    'name' => 'Шуба мини (бежевый)',
                    'cost' => '23 900 RUB'
                ),
                array(
                    'path' => 'num4',
                    'name' => 'Брюки клёш вязаные (молочный)',
                    'cost' => '7 700 RUB'
                ),
                array(
                    'path' => 'num5',
                    'name' => 'Пальто-шуба (бежевый)',
                    'cost' => '11 900 RUB'
                ),
                array(
                    'path' => 'num6',
                    'name' => 'Юбка с разрезом вязаная (бежевый)',
                    'cost' => '5 100 RUB'
                ),
                array(
                    'path' => 'num7',
                    'name' => 'Свитер-кейп (бежевый)',
                    'cost' => '8 100 RUB'
                ),
                array(
                    'path' => 'num8',
                    'name' => 'Джемпер с запахом кашкорсе (светло-бежевый)',
                    'cost' => '5 300 RUB'
                ),
                array(
                    'path' => 'num9',
                    'name' => 'Брюки широкие  (бежевый)',
                    'cost' => '5 900 RUB'
                ),
                array(
                    'path' => 'num10',
                    'name' => 'Шарф объёмный (бежевый)',
                    'cost' => '3 900 RUB'
                ),
                array(
                    'path' => 'num11',
                    'name' => 'Брюки широкие  (клетка)',
                    'cost' => '5 900 RUB'
                ),
                array(
                    'path' => 'num12',
                    'name' => 'Варежки (капучино)',
                    'cost' => '1 900 RUB'
                ),
           );
            echo '
            <div class="item-div"><img src="assets/'.$_GET["item"].'.jpg" alt="clothes" class="item-img">
            <img src="assets/'.$_GET["item"].'_1.jpg" alt="clothes" class="item-img">
            <img src="assets/'.$_GET["item"].'_2.jpg" alt="clothes" class="item-img">
            ';
            foreach($array as $product){
                if($product['path'] == $_GET["item"]){
                 echo '<div
                 <p class="item-p">'.$product['name'].'</p>
                 <p class="item-p">'.$product['cost'].'</p>
                 </div>';
                }
             }
            ?>
        </div>
        <div class="window-footer">
            <div class="d-flex">
                <div class="window-footer-left">
                    <h2 style="margin-bottom: 8px;">Showrooms</h2>
                    <?php
                        $cities = array(
                            array(
                                'city' => 'Ekaterinburg',
                                'id' => 'ChIJe7gk3fNuwUMR4LC1B_eadA0',
                                'address' => 'Хохрякова, 41',
                                'phone' => '+7(800)350-55-32',
                            ),
                            array(
                                'city' => 'Sankt-Petersburg',
                                'id' => 'ChIJP062QAUxlkYRgoREF6N_mkM',
                                'address' => 'Набережная реки Мойки, 59',
                                'phone' => '+7(800)350-55-32',
                            ),
                            array(
                                'city' => 'Moscow',
                                'id' => 'ChIJrwmfAzlKtUYRfghcxYwVN4U',
                                'address' => 'Большая Садовая 5, строение 1',
                                'phone' => '+7 (800) 350-55-32',
                            ),
                            array(
                                'city' => 'Almaty',
                                'id' => 'ChIJWy_liuxugzgRQqme-3GSFFk',
                                'address' => 'Кабанбай Батыра, 104',
                                'phone' => '+7(727)312-28-40',
                            ),
                    );
                        foreach($cities as $city){
                            foreach($city as $key => $val){
                                if($key == "city"){
                                    echo '<a class="link footer-a" href="locations.php?city=' . $val . '">'.$val.'</a><br><br>';
                                }
                            }
                        }
                    ?>
                </div>
                <div class="window-footer-right">
                    <h2 style="margin-bottom: 8px;">About us</h2>
                    <p>Delivering and payment</p><br>
                    <p>Loyality program</p><br>
                    <p>Return terms</p><br>
                    <a class="link footer-a" href="contacts.php">Contacts</a><br><br>
                    <p>FAQ</p>
                </div>
            </div>
            <div class="d-flex" style="margin-top: 10px">
                <h2>USHATÁVA</h2>
                <div class="d-flex">
                    <a href="https://vk.com/ushatava" target="_blank">
                        <img class="social-media-logo" alt="" src="assets/vk-logo.png">
                    </a>
                    <a href="https://www.facebook.com/ushatavarussia" target="_blank">
                        <img class="social-media-logo" alt="" src="assets/facebook-logo.png">
                    </a>
                    <a href="https://www.instagram.com/ushatava_live/" target="_blank">
                        <img class="social-media-logo" alt="" src="assets/instagram-logo.png">
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
<div></div>
