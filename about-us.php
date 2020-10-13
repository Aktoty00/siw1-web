<!DOCTYPE html>
<html>
    <head> 
        <title>Ushatava</title>
        <link rel="stylesheet" href="about-us.css">
        <link rel="shortcut icon" href="assets/logo.jpg" type="image/x-icon">
    </head> 
    <body>
        <header class="window-header d-flex">
            <a class="link" href="catalog.php">Catalog<a>
            <a class="link" href="index.php">USHATÁVA<a>
            <a class="link" href="about-us.php">About us<a>
        </header>
        <div class="window-body">
        <?php
            $text1 = "USHATÁVA позиционирует себя как бренд нетривиальной базовой одежды, хотя изначально у Нино и Алисы не было плана концентрироваться лишь на этом сегменте.";
            $text2 = "Бренд с сибирскими корнями USHATÁVA , чье название образуют фамилии его основательниц, существует уже четыре года. За это время подруги Алиса Ушакова и Нино Шаматава смогли не просто создать популярную марку одежды, но и открыть магазины в Москве, Санкт-Петербурге, Екатеринбурге и Сочи.";
            $text3 = "Однажды Алиса и Нино случайно оказались вместе на борту самолета и на протяжении нескольких часов обсуждали моду, вещи, новые коллекции и пришли к выводу, что настолько схожие вкусы встречаются редко и с этим нужно что-то делать.";
            $text4 = "Вернувшись в Екатеринбург, девушки решили научиться шить, чтобы делать вещи в первую очередь для себя.";
            $text5 = "Первая вещь, которую сшили девушки, до сих пор присутствует в коллекциях бренда в том или ином виде. Это был топ-полотно, они сделали его для своей подруги за пару дней.";
            $text6 = "Сегодня USHATÁVA выпускает от 10 до 12 коллекций в год. Кроме того, это один из редких российских брендов, у которого можно купить мужские вещи. ";
            $text7 = "У USHATÁVA  есть свои отличительные черты, по которым бренд можно легко идентифицировать. Во-первых, это юбка-баска, которая в разных дизайнах переходит из коллекции в коллекцию и остается одним из бестселлеров бренда. Во-вторых, юбки-карандаши и те самые топы-полотна, лекала для которых разрабатывали Нино и Алиса в самом начале пути.";
            $text8 = "«Я бы сказала, что многослойность — еще одна особенность нашего бренда, — замечает Нино. — Если вы видите сложносочиненный, интересный образ, выдержанный в приглушенных, пыльных оттенках, то можно предположить, что это USHATÁVA.";
            $text9 = "USHATÁVA — российский бренд одежды для тех, кто всегда в поисках чего-то особенного. Мы представляем коллекции, каждая из которых транслирует наше собственное видение мира, и вдохновляемся путешествиями, произведениями искусства, людьми, окружающими нас";
        ?>
            <table style="margin: 50px;">
                <tbody>
                    <tr>
                        <td>
                            <?= $text1 ?>
                            <?= $text2 ?>
                        </td>
                        <td>
                            <img class="sisters-img" src="assets/sisters1.jpg">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $text3 ?>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="sisters-img" src="assets/sisters2.jpg">
                        </td>
                        <td>
                            <?= $text4 ?>
                            <?= $text5 ?>
                            <?= $text6 ?>

                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        <?= $text7 ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <?= $text8 ?>
                        <?= $text9 ?>
                        </td>
                        <td>
                        <img class="sisters-img" src="assets/sisters3.png">
                        </td>
                    </tr>
                </tbody>
            </table>

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
