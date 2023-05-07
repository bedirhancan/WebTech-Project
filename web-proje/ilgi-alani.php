<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous"
  />
    <title>İlgi Alanlarım</title>
    <link rel="stylesheet" href="CSS/header-footer.css" />
    <link rel="stylesheet" href="CSS/anasayfa-main.css">
  </head>
  <body id="body">
  <header class="main-header">
      <div id="main-nav" class="container-fluid">
        <a class="main-header__logo">Bedirhan Can</a>
        <nav class="main-nav">
          <ul class="main-nav__items">
            <li class="main-nav__item">
              <a href="ana-sayfa.html">Ana Sayfa</a>
            </li>
            <li class="main-nav__item">
              <a href="ozgecmis.html">Özgeçmiş</a>
            </li>
            <li class="main-nav__item">
              <a href="sehrim.html">Şehrim</a>
            </li>
            <li class="main-nav__item">
              <a href="takimimiz.html">Takımımız</a>
            </li>
            <li class="main-nav__item">
              <a href="ilgi-alani.php">İlgi Alanlarım</a>
            </li>
            <li class="main-nav__item">
              <a href="iletisim.html">İletişim</a>
            </li>
            <li class="main-nav__item main-nav__item--login">
              <a class="btn btn-secondary" href="login.html">Login</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="main-bg">
      <section id="how-it-works">
        <div class="container">
          <div class="row">
            <section  class="text-white mx-5 mb-5 mt-5">
              <div class="bg-dark container border border-secondary rounded shadow-lg">
                <div class="row my-3 ">
                  <div class="col-lg-12 my-4 mt-5">
                    <h1 class="display-4 text-white" style="text-align:center">
                      <?php
                        $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/para-birimleri.json'), true);
                      ?>
                     <table class="table">
                      <thead>
                        <tr style="color: goldenrod;">
                          <th scope="col">#</th>
                          <th scope="col">Birim</th>
                          <th scope="col">Fiyat</th>
                          <th scope="col">Değişim</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr style="color: whitesmoke;">
                          <th scope="row">1</th>
                          <td>DOLAR</td>
                          <td>Fiyat: <?php echo $JSON['USD']['satis']; ?></td>
                          <td>Değişim: <?php echo $JSON['USD']['degisim'];?></td>
                        </tr>
                        <tr style="color: whitesmoke;">
                          <th scope="row">2</th>
                          <td>EURO</td>
                          <td>Fiyat: <?php echo $JSON['EUR']['satis']; ?></td>
                          <td>Değişim: <?php echo $JSON['EUR']['degisim']; ?></td>
                        </tr>
                        <tr style="color: whitesmoke;">
                          <th scope="row">3</th>
                          <td>STERLIN</td>
                          <td>Fiyat: <?php echo $JSON['GBP']['satis']; ?></td>
                          <td>Değişim: <?php echo $JSON['GBP']['degisim']; ?></td>
                        </tr>
                        <tr style="color: whitesmoke;">
                          <th scope="row">4</th>
                          <td>BITCOIN</td>
                          <td>Fiyat: <?php echo $JSON['BTC']['satis']; ?></td>
                          <td>Değişim: <?php echo $JSON['BTC']['degisim']; ?></td>
                        </tr>
                        <tr style="color: whitesmoke;">
                          <th scope="row">4</th>
                          <td>ALTIN</td>
                          <td>Fiyat: <?php echo $JSON['GA']['satis']; ?></td>
                          <td>Değişim: <?php echo $JSON['GA']['degisim']; ?></td>
                        </tr>
                      </tbody>
                    </table>
                    </h1>
                  </div>
                </div>
              </div>
            </section>
          </div>
    </main>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-2">
            <ul id="footer-links">
              <li><a href=""><small>Copyright © 2023. All rights reserved.</small></a></li>
            </ul>
          </div>
          <div class="col-2">
            <ul id="social-links">
              <li><a href="https://www.facebook.com/bedocann8/" class="fab fa-facebook" target="_blank"></a></li>
              <li><a href="https://twitter.com/bedocann8" class="fab fa-twitter" target="_blank"></a></li>
              <li><a href="https://www.instagram.com/bedocann8/" class="fab fa-instagram" target="_blank"></a></li>
              <li><a href="https://www.linkedin.com/in/bedirhancan/" class="fab fa-linkedin" target="_blank"></a></li>
              <li> <a href="https://vsco.co/bedocann8/" target="_blank">  <img class="vsco"  src="https://assets.vsco.co/assets/images/icons/vsco-seal.svg" alt="vsco logo"> </a></li>
              <li><a href="https://open.spotify.com/user/c3p98u36gl1np9cwmypbmmnf7?si=760845a043b24cd1" class="fab fa-spotify" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <a href="#body" id="backtotop">
      <i class="fas fa-chevron-circle-up"></i>
     </a>
     
     <script
     src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
     crossorigin="anonymous"
   ></script>

  </body>
</html>
