<?php include "libs/HtmlSpecialChars.php"; ?>
<?php include "queries/work-queries.php"; ?>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Theo Sylvoz</title>
      <link rel="icon" type="image/png" href="#"/>
  <link rel=" stylesheet" type="text/css" title="stylesheet" href="static/assets/css/normalize.css">
  <link rel="stylesheet" type="text/css" title="stylesheet" href="static/assets/css/style.min.css">
  <script src="https://kit.fontawesome.com/7ee3d41dde.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <!--mobile menu-->
    <nav class="mobile-nav-menu">
      <div class="mobile-nav-menu-container">
        <ul>
          <li>
            <a href="http://theosylvoz.com">home</a>
          </li>
          <li>
            <div class="selector">
            </div>
            <a href="http://theosylvoz.com/work">work <span class="number"><?php echo _escape($sumwork["COUNT(DISTINCT artName)"]); ?></span></a>
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
    <!--filter menu-->
    <nav class="mobile-filter-menu">
      <div class="mobile-filter-menu-container">
        <ul>
          <li>
            <div class="selector">
            </div>
            <a href="http://theosylvoz.com/work">all</a>
          </li>
        		<?php foreach($types as $type): ?>
              <li>
                <a href="http://theosylvoz.com/work?type=<?php echo _escape($type['artType']);?>">
                  <?php echo _escape($type['artType']); ?>
                  <span class="number count"><?php echo _escape($type['count']); ?></span>
                </a>
                </li>
              <?php endforeach; ?>
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
                <!--place logo img here -->
                <nav class="nav">
                    <div id="nav-menu">
                      <ul>
                        <div class="nav-content">
                          <li id="open-filter">filter</li>
                          <li id="open-nav">menu</li>
                        </div>
                        <div class="nav-line">
                        </div>
                      </ul>
                    </div>
                  </nav>
              </div>
              <div class="menu">
                <nav class="mobile-filter-menu-desk">
                  <div class="mobile-filter-menu-container-desk">
                    <ul>
                      <li>

                        <a href="http://theosylvoz.com/work">all</a>
                        <div class="selector">
                        </div>
                      </li>
                    		<?php foreach($types as $type): ?>
                          <li>
                            <a href="http://theosylvoz.com/work?type=<?php echo _escape($type['artType']);?>">
                              <?php echo _escape($type['artType']); ?>
                            </a>
                            <span class="number count"><?php echo _escape($type['count']); ?></span>
                            </li>
                          <?php endforeach; ?>
                    </ul>
                  </div>
                </nav>
                <div class="art-view">
                  <ul id="hides">
                    <!--supprime les images d'un projet qui en comporte plusieurs en ajoutant la classe hide-->
                    <?php foreach ($pictures as $picture): ?>
                      <li <?php
                                if(empty(_escape($picture["artPath"]))){
                                echo 'class="hide"';
                                }
                          ?>>
                        <a href="<?php
                        $a = $picture["artId"];

                        if ($picture["displayType"] == "slider"){
                          echo "http://theosylvoz.com/display-any?id=$a";
                        }else{
                          echo "http://theosylvoz.com/display?id=$a";
                        }
                        ?>">
                          <img src="static/assets/img/ressources/<?php echo _escape($picture ['artPath']); ?>"></a>
                        <i class="fas fa-plus"></i>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                  <!--si la colonne artPath n'est pas vide affiche le contenu de <li>, alors si elle est vide n'affiche pas le contenu de <li> en ajoutant une classe contenant la regle display:none;-->
                </div>
                <div class="corner-icon">
                  <i class="fas fa-plus"></i>
                  <nav class="nav">
                    <div id="nav-menu">
                      <ul>
                        <div class="nav-content">
                          <li id="open-filter">filter</li>
                          <li id="open-nav">menu</li>
                        </div>
                        <li>
                          <a href="http://theosylvoz.com">home</a>
                        </li>
                        <li>
                          <a href="http://theosylvoz.com/work">work
                            <span class="number"><?php echo _escape($sumwork["COUNT(DISTINCT artName)"]);?></span>
                          </a>
                          <div class="selector">
                          </div>
                        </li>
                        <li>
                          <a href="http://theosylvoz.com/contact">contact</a>
                        </li>
                      </ul>
                    </div>
                    <div class="nav-line">
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
    <script src="https://kit.fontawesome.com/7ee3d41dde.js"></script>
    <script src="http://localhost:35729/livereload.js"></script>
  </footer>
</body>
</html>
