<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Foundation Starter Template</title>

        <script src="./assets/js/vendor/jquery.js"></script>
        <script src="./assets/js/vendor/foundation.min.js"></script>
        <link rel="stylesheet" href="./assets/css/foundation.css" />
        <link rel="stylesheet" href="./assets/dist/style.css">
        <!-- <script src="./assets/js/app.js"></script> -->
    </head>
    <script>
      function showNav() {
        var nav = document.getElementById('nav_div');
        if (nav.className.includes('closed')) {
          nav.className = nav.className.replace('closed', 'open')
        } else if (nav.className.includes('open')) {
          nav.className = nav.className.replace('open', 'closed');
        }
      }
      function buttonPressed() {
        var header = document.getElementById('header');
        if (!header.className.includes('hidden')) {
          header.className = header.className + 'hidden';
        }
      }
      // var header = document.getElementById('header');
      // $(document).ready(function(){
      //   console.log($(document).scrollTop());
      // })

      function pageScrolled() {
        var header = document.getElementById('header');
        var nav = document.getElementById('pc_navigation');
        if ($(document).scrollTop() > 0) {
          // console.log($(document).scrollTop());
          if (!header.className.includes('hidden')) {
            header.className = header.className + 'hidden';
          }
          if (!nav.className.includes('header_hidden')) {
            nav.className = nav.className + ' header_hidden'
          }
        } else {
          if (header.className.includes('hidden')) {
            header.className = header.className.replace('hidden', '');
          }
          if (nav.className.includes('header_hidden')) {
            nav.className = nav.className.replace(' header_hidden', '');
          }
        }
        // var pc_nav = document.getElementById('pc_navigation');
        // var sticky = pc_nav.offsetTop;
        // if ()
      }

    </script>
    <body onscroll="pageScrolled()">
        <div id="header">
          <div id="header_logo">
            <img src="./src/images/logo-putzenhof-gold.svg" alt="Putzenhof">
            <img class="logo_alt" src="./src/images/Screenshot_5.png" alt="Putzenhof">
          </div>
          <div id="header_main">
            <div id="header_contact">
              <div id="phone">
                <!-- <img src="./src/images/phone.svg" alt="Telefon" id="phone"> -->
                <img src="./src/images/phone.svg" alt="Telefon">
                <span id="number">+43 (0) 664 2868936</span>
              </div>
              <img src="./src/images/envelope.svg" alt="E-Mail" id="email">
              <img src="./src/images/location.svg" alt="Lage" id="location">
            </div>
            <div id="header_nav" onclick="showNav()">
              <span>MENÜ</span>
              <img id="bars" src="./src/images/bars.svg" alt="bars">
            </div>
          </div>
        </div>
        <div id="pc_navigation" class="pc_nav">
          <ul>
            <div></div>
              <button class="button" type="button" data-toggle="example-dropdown-1">Der Putzenhof</button>
              <div class="dropdown-pane" id="example-dropdown-1" data-dropdown data-hover="true" data-hover-pane="true">
                <li><a href="#">Lage & Anreise</a></li>
                <li><a href="#">Impressionen</a></li>
              </div>
              <button class="button" type="button" data-toggle="example-dropdown-2">Appartements & Preise</button>
              <div class="dropdown-pane" id="example-dropdown-2" data-dropdown data-hover="true" data-hover-pane="true">
                <li><a href="#">Appartement "Melchior Putz"</a></li>
                <li><a href="#">Appartement "Großglockner</a></li>
                <li><a href="#">Preise</a></li>
                <li><a href="#">Anfrage</a></li>
              </div>
              <button class="button" type="button" data-toggle="example-dropdown-3">Region & Aktiv</button>
              <div class="dropdown-pane" id="example-dropdown-3" data-dropdown data-hover="true" data-hover-pane="true">
                <li><a href="#">Nationalpark Hohe Tauern & Großglockner</a>
                <li><a href="#">Sommer</a></li>
                <li><a href="#">Winter</a></li>
              </div>
              <button class="button" type="button">Anfrage</button>
              
            <!-- <li class="no-hover" onmouseover="openList()">Der Putzenhof</li>
            <li class="no-hover" onmouseover="openList()">Appartements & Preise</li>
            <li class="no-hover" onmouseover="openList()">Region & Aktiv</li>
            <li class="no-hover" onmouseover="openList()">Anfrage</li> -->
            <div></div>
          </ul>
        </div>
        <div id="nav_div" class="closed">
          <!-- <details>
            <summary>Der Putzenhof</summary>
            <a href="#">Lage & Preise</a><br />
            <a href="#">Impressionen</a>
          </details>
          <details>
            <summary>Appartements & Preise</summary>
            <a href="#">Appartement "Melchior Putz"</a><br />
            <a href="#">Appartement "Großglockner"</a><br />
            <a href="#">Preise</a><br />
            <a href="#">Anfrage</a>
          </details>
          <details>
            <summary>Region & Aktiv</summary>
            <a href="#">Nationalpark Hohe Tauern & Großglockner</a><br />
            <a href="#">Sommer</a><br />
            <a href="#">Winter</a>
          </details>
          <a href="#">Anfrage</a> -->

          <ul class="vertical menu accordion-menu" data-accordion-menu>
            <li>
              <a href="#">Der Putzenhof</a>
              <ul class="menu vertical nested">
                <li><a href="#">Lage & Anreise</a></li>
                <li><a href="#">Impressionen</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Appartements & Preise</a>
              <ul class="menu vertical nested">
                <li><a href="#">Appartement "Melchior Putz"</a></li>
                <li><a href="#">Appartement "Großglockner</a></li>
                <li><a href="#">Preise</a></li>
                <li><a href="#">Anfrage</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Region & Aktiv</a>
              <ul class="menu vertical nested">
                <li><a href="#">Nationalpark Hohe Tauern & Großglockner</a></li>
                <li><a href="#">Sommer</a></li>
                <li><a href="#">Winter</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Anfrage</a>
            </li>
          </ul>
          
        </div>


        <!-- <div id="main_pic_div">
          <img id="main_pic" src="./src/images/csm_putzenhof-aussen-01_d1682a7261.jpg" alt="">
        </div> -->

        <div class="news-image-gallery-container">
          <div class="row">
            <div class="small-12 medium-12 large-8 columns">
              <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                <ul class="orbit-container">
                  <!-- <button class="orbit-previous">&#9664;&#xFE0E;</button> -->
                  <button class="orbit-previous">
                    <img src="./src/images/2x/baseline_keyboard_arrow_left_black_18dp.png" alt="Zurück">
                  </button>
                  <button class="orbit-next">
                    <img src="./src/images/2x/baseline_keyboard_arrow_right_black_18dp.png" alt="Vor">
                  </button>
                  <li class="is-active orbit-slide">
                    <img class="orbit-image" src="./src/images/csm_putzenhof-aussen-01_d1682a7261.jpg" alt="Space">
                    <!-- <figcaption class="orbit-caption">Space, the final frontier.</figcaption> -->
                  </li>
                  <li class="orbit-slide">
                    <img class="orbit-image" src="./src/images/csm_putzenhof-felsch-9878-HDR_94b7cfc87f.jpg" alt="Space">
                    <!-- <figcaption class="orbit-caption">Lets Rocket!</figcaption> -->
                  </li>
                  <li class="orbit-slide">
                    <img class="orbit-image" src="./src/images/csm_putzenhof-felsch-0400-HDR_a707e498b9.jpg" alt="Space">
                    <!-- <figcaption class="orbit-caption">Encapsulating</figcaption> -->
                  </li>
                  <li class="orbit-slide">
                    <img class="orbit-image" src="./src/images/csm_putzenhof-02_b9e8f3b943.jpg" alt="Space">
                    <!-- <figcaption class="orbit-caption">Outta This World</figcaption> -->
                  </li>
                </ul>
                <!-- <nav class="orbit-bullets">
                  <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                  <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                  <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                  <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                </nav> -->
              </div>
            </div>
            <!-- <div class="small-12 medium-12 large-4 columns">
              <div class="rounded-social-buttons">
                <a class="social-button facebook" href="#"></a>
                <a class="social-button twitter" href="#"></a>
                <a class="social-button linkedin" href="#"></a>
                <a class="social-button google-plus" href="#"></a>
              </div>
              <div class="clearfix"></div>
              <h4 class="news-image-gallery-title">Extraterrestrial culture: How we express ourselves through space exploration</h4>
              <p>
                This is not a new thing. Terrestrial cultures have (always) had a degree of extraterrestrial-ity in them. Cultural astronomers and archeoastronomers...
                <a href="#" class="read-more">
                  Read More
                </a>
              </p>
            </div> -->
          </div>
        </div>



        <div class="inquery_button_div">
          <div>
            <span>an</span>
            <input type="date">
            <span>ab</span>
            <input type="date">
            <button id="inquery_button">Anfragen</button>
          </div>
        </div>
        <div class="main">
          <h1>Herzlich Willkommen im Putzenhof</h1>
          <h2>Stilvolle Appartements in Großkirchheim</h2>

          <div id="mini_logo_div">
            <div id="mini_logo">
              <img src="./src/images/Screenshot_4.png" alt="">
            </div>
          </div>

          <p>
            Unser historisches Gebäude aus der Goldgräberzeit
            befindet sich im Mölltal am Fuße des Großglockners 
            und beherbergt <a>neu renovierte Ferienwohnungen in 
            Döllach Großkirchheim</a> mit einem einzigartigen Ambiente. 
            Moderner Luxus trifft auf Geschichte im Urlaub am Großglockner.
          </p>
        </div>

        <div class="content">
          <div class="cards">
            <div></div>
            <div class="card">
              <img src="./src/images/csm_putzenhof-appartement-03_6de71fe36f.png">
              <div class="card-section">
                <h4>Appartements</h4>
                <p>gediegen Wohnen im Putzenhof</p>
                <img class="arrow" src="./src/images/arrow-right.svg" alt="">
              </div>
            </div>
            <div></div>
            <div></div>
            <div class="card">
              <img src="./src/images/Screenshot_3.png">
              <div class="card-section">
                <h4>Der Putzenhof</h4>
                <p>Geschichte, Lage und Region</p>
                <img class="arrow" src="./src/images/arrow-right.svg" alt="">
              </div>
            </div>
            <div></div>
            <div></div>
            <div class="card">
              <img src="./src/images/Screenshot_1.png">
              <div class="card-section">
                <h4>Sommerurlaub</h4>
                <p>Sommer am Großglockner</p>
                <img class="arrow" src="./src/images/arrow-right.svg" alt="">
              </div>
            </div>
            <div></div>
            <div></div>
            <div class="card">
              <img src="./src/images/Screenshot_2.png">
              <div class="card-section">
                <h4>Winter</h4>
                <p>Winter im Nationalpark Hohe Tauern</p>
                <img class="arrow" src="./src/images/arrow-right.svg" alt="">
              </div>
            </div>
            <div></div>
          </div>
          <div class="text">
            <h1>Ferienwohnungen in Döllach am Großglockner</h1>
            <p>
              Freuen Sie sich auf Ihren Urlaub in der Ferienregion 
              Grossglockner inmitten des Nationalparks Hohe Tauern 
              und tauchen Sie ein in die Welt des Tauerngoldes, 
              der Mythen und Legenden rund um den Goldbergbau. 
              Lernen Sie das Dorfleben kennen und schätzen und 
              genießen Sie die Flora und Fauna des Nationalpark 
              Hohe Tauern und das umfangreiche Angebot an 
              Freizeitaktivitäten – ob Sommer oder Winter. 
              Vielleicht finden Sie auch ein Stück Gold beim 
              Goldwaschen im Fleißtal!
              <span style="display: block;margin-top: 15px;">Glück auf und bis bald in der Ferienregion Grossglockner</span>
              <span style="display:block;margin-top: 30px;padding-bottom:40px;">Familie Balthasar Sauper</span>
            </p>
          </div>
          <div class="calltoaction">
            <h2>Ihr Urlaub im Putzenhof</h2>
            <p>
              Fragen Sie jetzt unverbindlich an, gerne erstellen wir 
              Ihnen ein Angebot für unsere Appartements im historischen Ambiente 
              im Nationalpark Hohe Tauern.
            </p>
            <button>Jetzt Anfragen</button>
          </div>
        </div>
    
        <footer>
          <div class="upper">
            <div class="contact">
              <img src="./src/images/logo-putzenhof-gold.svg" alt="Putzenhof">
              <p>Putzenhof Appartements</p>
              <br />
              <p>Am Putzenhof</p>
              <p>9843 Großkirchheim | Österreich</p>
              <br />
              <p>T <span style="text-decoration: underline;">+43 (0) 664 2868936</span></p>
              <p>E <span style="text-decoration: underline;">info@putzenhof-appartements.at</span></p>
            </div>
            <div class="footer_links">
              <p>Servicelinks</p>
              <a href="#">Anfrage</a>
              <a href="#">Lage & Anreise</a>
              <a href="#">Sitemap</a>
            </div>
            <div style="border-left:2px solid grey;"></div>
            <div class="nationalpark">
              <p class="header">Urlaub im Nationalpark Hohe Tauern</p>
              <p>Urlaub inmitten der Hohen Tauern buchen. Fragen Sie unverbindlich an.</h4>
              <button>Jetzt anfragen</button>
            </div>
          </div>
          <div class="images">
            <img src="./src/images/logo-stgeorg.png" alt="St. Georg">
            <img src="./src/images/csm_rz-alpenh-logo_f77e6ef5ed.png" alt="Großglockner Kaiser Franz-Josefs-Höhe">
          </div>
          <div class="lower">
            <a href="#">Impressum & AGB</a>
            <a href="#">Sitemap</a>
            <a href="#">Datenschutz & Cookies</a>
            <a href="#" class="bluechip">
              <img src="./src/images/logo.ico" alt="Bluechip">
              Weblight by bluechip.at
            </a>
          </div>
        </footer>




        <script src="./assets/js/vendor/jquery.js"></script>
        <script src="./assets/js/vendor/what-input.js"></script>
        <script src="./assets/js/vendor/foundation.min.js"></script>
        <script>
            $(document).foundation();


            $(document).ready(function(){
              // console.log($(document).scrollTop());
              // if ($(document).scrollTop() > 0) {
              //   console.log("abc");
              // }
              
            });

            
            
        </script>

    </body>
</html>
