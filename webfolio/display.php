<!DOCTYPE html>
<html lang="fr">
<?php include "queries/display-queries.php"; ?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Theo Sylvoz</title>
  <link rel="icon" type="image/png" href="#"/>
<link rel=" stylesheet" type="text/css" title="stylesheet" href="static/assets/css/normalize.css">
<link rel="stylesheet" type="text/css" title="stylesheet" href="static/assets/css/style.min.css">
</head>
<body>
<header>
  <nav class="mobile-nav-menu">
    <div class="mobile-nav-menu-container">
      <ul>
        <li>
          <a href="http://theosylvoz.com">home</a>
        </li>
        <li>
          <div class="selector">
          </div>
          <a href="http://theosylvoz.com/work">work <span class="number"><?php echo ($sumwork["COUNT(DISTINCT artName)"]); ?></span></a>
        </li>
        <li>
          <a href="http://theosylvoz.com/contact">contact</a>
        </li>
        <li class="mobile-nav-close">
          <p id="close-nav">close</p>
          <div class="nav-line">
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <nav class="mobile-filter-menu">
    <div class="mobile-filter-menu-container">
      <ul>
        <li>
          <div class="selector">
          </div>
          <a href="http://theosylvoz.com/work">all</a>
        </li>
          <li class="mobile-nav-close">
            <p id="close-filter">close</p>
            <div class="nav-line">
            </div>
          </li>
      </ul>
    </div>
  </nav>
</header>
<main>
  <div class="container work">
    <div class="star work-container">
      <div class="elemnt">
        <div class="background-card-full">
          <div class="background-card-content">
            <div class="corner-icon">
              <i class="fas fa-plus"></i>
              <i class="fas fa-plus"></i>
            </div>
            <div class="title">
                <nav class="nav">
                    <div id="nav-menu">
                      <ul>
                        <div class="nav-content">
                          <li id="open-filter"></li>
                          <li>
                              <a href="http://theosylvoz.com/work">return</a>
                          </li>
                        </div>
                        <div class="nav-line">
                        </div>

                      </ul>
                    </div>

                  </nav>
            </div>
            <div class="menu">
                <div class="display">
                  <ul>
                      <li>
                        <!--Affiche la pre-visionnage, la pre-visionnage agrandie ou l'image complete-->
                          <img src="static/assets/img/ressources/<?php if (empty($image['artDisplay'])){
                                                                          echo ($image['artPath']);
                                                                        }else{
                                                                          echo ($image['artDisplay']);}?>">
                      </li>
                  </ul>
                </div>
              <div class="corner-icon">
                <i class="fas fa-plus"></i>
                <nav class="nav">
                  <div id="nav-menu">
                    <ul>
                      <div class="nav-content">
                        <li id="open-filter"></li>
                        <li id="open-nav">menu</li>
                      </div>
                      <li>
                        <a href="http://theosylvoz.com">home</a>
                      </li>
                      <li>
                        <a href="http://theosylvoz.com/work">work
                          <span class="number"><?php echo ($sumwork["COUNT(DISTINCT artName)"]); ?></span>
                        </a>
                        <div class="selector">
                        </div>
                      </li>
                      <li>
                        <a href="http://theosylvoz.com/contact">contact</a>
                      </li>
                    </ul>
                  </div>
                  <div class="nav-line">²
                  </div>
                </nav>
                <i class="fas fa-plus"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<footer>
    <script src="static/assets/js/main.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/7ee3d41dde.js" crossorigin="anonymous"></script>
</footer>
</body>
</html>
