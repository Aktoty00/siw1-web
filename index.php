<!DOCTYPE html>
<html>
    <head> 
        <title>USHATÁVA</title>
        <link rel="stylesheet" href="main.css">
        <link rel="shortcut icon" href="assets/logo.jpg" type="image/x-icon">
    </head> 
    <body>
        <header class="window-header d-flex">
            <a class="link" href="catalog.php">Catalog<a>
            <a class="link" href="index.php">USHATÁVA<a>
            <a class="link" href="about-us.php">About us<a>
        </header>
        <div class="window-body">
            <img src="assets/main.jpg">
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
