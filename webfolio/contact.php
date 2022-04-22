<!DOCTYPE html>
<html lang="fr">
<?php include "queries/contact-queries.php"; ?>
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
            <a href="http://theosylvoz.com/work.php">work <span class="number"><?php echo ($sumwork["COUNT(DISTINCT artName)"]); ?></span></a>
          </li>
          <li>
            <div class="selector">
            </div>
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
                          <li id="open-filter"></li>
                          <li id="open-nav">menu</li>
                        </div>
                        <div class="nav-line">
                        </div>
                      </ul>
                    </div>
                  </nav>
              </div>
              <div class="menu correct">
                <div class="nav-filter-desk">
                </div>
                <div class="size-control contact">
                  <h1>
                    You have a project ? Let's talk together ! :)
                  </h1>
                  <div class="contact-line">
                  </div>
                <article>
                  <p>You have an idea or a project that requires illustrations, graphics or web design, you need information, details, or you just want to say hello: Leave me your email and a note and I will get back to you very quickly.</p>
                  <p>Thanks !</p>
                  <div class="eye-gif">
                    <img src="static\assets\img\ressources\eyeroll.gif" alt="eye-gif">
                  </div>
                  <div class="mail">
                    <a href="mailto: theosylvoz@gmail.com"><img src="static\assets\img\ressources\mail-info.png" alt="mail"></a>
                  </div>
                </article>
                </div>
                <div class="corner-icon">
                  <i class="fas fa-plus"></i>
                  <nav class="nav">
                    <div id="nav-menu">
                      <ul>
                        <div class="nav-content">
                          <li></li>
                          <li id="open-nav">menu</li>
                        </div>
                        <li>
                          <a href="http://theosylvoz.com">home</a>
                        </li>
                        <li>
                          <a href="http://theosylvoz.com/work">work
                            <span class="number"><?php echo ($sumwork["COUNT(DISTINCT artName)"]); ?></span>
                          </a>
                        </li>
                        <li>
                          <a href="http://theosylvoz.com/contact">contact</a>
                          <div class="selector">
                          </div>
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
  </footer>
</body>
</html>