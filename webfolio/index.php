<!DOCTYPE html>
<html lang="fr">
<?php include "queries/index-queries.php"; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Theo Sylvoz</title>
  <link rel="icon" type="image/png" href="favicon.png"/>
  <link rel=" stylesheet" type="text/css" title="stylesheet" href="static/assets/css/normalize.css">
  <link rel="stylesheet" type="text/css" title="stylesheet" href="static/assets/css/style.min.css">
</head>
<body>
  <header>
    <nav class="mobile-nav-menu">
      <div class="mobile-nav-menu-container">
        <ul>
          <li>
            <div class="selector">
            </div>
            <a href="http://theosylvoz.com">home</a>
          </li>
          <li> <a href="http://theosylvoz.com/work">work <span class="number"><?php echo ($sumwork["COUNT(DISTINCT artName)"]); ?></span></a>
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
  </header>
  <main>
    <div class="rotate">
      <div class="container">
        <div class="star">
          <div class="elemnt">
            <div class="background-card">
              <div class="background-card-content">
                <div class="corner-icon">
                  <i class="fas fa-plus"></i>
                  <i class="fas fa-plus"></i>
                </div>
                    <li id="open-nav">menu</li>
                <div class="title">
                  <div class="logo-placeholder">
<!--                    <img src="static/assets/svg/logo.svg" alt="logotype">-->
                  </div>
                  <article>
                    <h1><span>Hello, </span>i'm graphist<span> & </span> webdesigner</h1>
                    <div class="title-line">
                      <div class="line">
                      </div>
                      <img src="static/assets/svg/star-title.svg" alt="title-line-frills">
                    </div>
                  </article>
                </div>
                <div class="social">
                  <aside class="social-nav">
                    <div>
                      <img src="static/assets/svg/social-line.svg" alt="social-frills">
                    </div>
                    <a href="#">
                      <i class="fab fa-dribbble"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-github-alt"></i>
                    </a>
                    <a href="https://www.instagram.com/plonnnk/">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <i class="fa fa-plus"></i>
                    <div>
                      <img src="static/assets/svg/social-line.svg" alt="social-frills">
                    </div>
                  </aside>
                </div>
                <div class="menu">
                  <div class="size-control">
                  </div>
                  <div class="corner-icon">
                    <i class="fas fa-plus"></i>
                    <nav class="nav">
                      <div id="nav-menu">
                        <ul>
                          <li id="open-nav">menu</li>
                          <li>
                            <a href="http://theosylvoz.com">home</a>
                            <div class="selector">
                            </div>
                          </li>
                          <li>
                            <a href="http://theosylvoz.com/work">work
                              <span class="number"><?php echo ($sumwork["COUNT(DISTINCT artName)"]); ?></span>
                            </a>
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
                  <div class="img-content">
                    <img src="static/assets/img/picture-home-test.png" alt="profile-picture">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="orbitalPath orbitalSize">
          <div class="posObject">
            <div class="orbitalObject">
              <div>
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
  </footer>
</body>
</html>
