<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>cipionhabla&thinsp;&middot;&thinsp;A designer specialized in research</title>
        <meta name="description" content="I focus on understanding user expectations, behaviors, needs, and motivations through methodical, investigative approaches. Moreover, I love working in the fields of UX Design, Visual Design, and Agile Development.">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 11]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <?php include_once("includes/iconography.php"); ?>
        <div class="spacecraft">
          <header id="header" class="spacecraft-command">
            <?php include_once("includes/icon-astronaut.php"); ?>
            <nav>
              <ul class="nav">
                <li class="nav__item"><a href="#about"><svg viewBox="0 0 96 96"><use xlink:href="#icon-about" /></svg><span>About</span></a></li>
                <li class="nav__item"><a href="#work"><svg viewBox="0 0 96 96"><use xlink:href="#icon-work" /></svg><span>Work</span></a></li>
                <li class="nav__item"><a href="#contact"><svg viewBox="0 0 96 96"><use xlink:href="#icon-contact" /></svg><span>Contact</span></a></li>
              </ul>
            </nav>

          </header>
          <main>
            <div class="spacecraft-stage spacecraft-stage--light">
              <p class="summary-hi"><strong>Hello,</strong></p>
              <h1 class="summary">I'm a <strong>designer</strong> who tries to resolve the most challenging problems in design.</h1>
            </div>
            <div class="spacecraft-stage spacecraft-stage--dark">
              <h2 id="about"><svg viewBox="0 0 96 96" class="icon-title"><use xlink:href="#icon-about" /></svg><span>About</span></h2>
              <h3>Jair Cárdenas (<abbr title="Also known as">aka</abbr> <em>cipionhabla</em>):</h3>
              <p>I focus on understanding user expectations, behaviors, needs, and motivations through methodical, investigative approaches. So I use <strong>insights</strong> to ensure that all product design decisions do <strong>benefit the user</strong>.</p>
            </div>
            <div class="spacecraft-stage spacecraft-stage--light">
              <h2 id="work"><svg viewBox="0 0 96 96" class="icon-title"><use xlink:href="#icon-work" /></svg><span>Work</span></h2>
              <p class="space-stack--m">The following are the most important and recent projects. I worked on those from conception, implementation, and, in some cases, development.</p>
              <?php include_once("includes/section-bizagi-mobile-app.php"); ?>
              <hr>
              <?php include_once("includes/section-bizagi-usability-testing.php"); ?>
            </div>
          </main>
          <footer class="spacecraft-stage spacecraft-stage--dark">
            <h2 id="contact"><svg viewBox="0 0 96 96" class="icon-title"><use xlink:href="#icon-contact" /></svg><span>Contact</span></h2>
            <form class="form" action="includes/form-contact.php" method="post" data-validate>
                <div class="form-illustration">
                    <p class="form-intro">Be part of my work, and make our goal to create happy and powered humans.</p>
                    <?php include_once("includes/icon-alien.php"); ?>
                </div>
                <div class="form-wrapper">
                  <div class="form-group">
                    <label for="name" class="form-label">My name is</label>
                    <input type="text" id="name" class="form-control" name="user_name" placeholder="John Doe" required>
                  </div>
                  <div class="form-group">
                    <label for="mail" class="form-label">My email is</label>
                    <input type="email" id="mail" class="form-control" name="user_mail" placeholder="john.doe@mail.com" required>
                  </div>
                  <div class="form-group">
                    <label for="msg" class="form-label">My message</label>
                    <textarea id="msg" name="user_message" class="form-control" placeholder="Hi, I want to work with you." rows="2" required></textarea>
                  </div>
                  <div class="button">
                    <button type="submit" class="form-button">Send my message</button>
                  </div>
                </div>
            </form>
            <p class="spacecraft-copy">Copyright &copy; 2018, Bogotá Colombia</p>
            <p class="spacecraft-signature"><a href="#" class="logo" data-modal><svg width="32" height="32"><use href="#cipionhabla" /></svg>cipionhabla</a></p>
            <div class="aileron aileron--left"></div>
            <div class="aileron aileron--right"></div>
            <div class="engine">
              <div class="engine__trapezium engine__trapezium--left"></div>
              <div class="engine__trapezium engine__trapezium--center"></div>
              <div class="engine__trapezium engine__trapezium--right"></div>
            </div>
            <div class="fire">
              <div class="fire__diamond fire__diamond--left"></div>
              <div class="fire__diamond fire__diamond--center"></div>
              <div class="fire__diamond fire__diamond--right"></div>
            </div>
          </footer>
        </div>
        <div class="space">
          <div class="stars"></div>
          <div class="star"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <!-- build:js js/main.min.js -->
          <script src="js/vendor/validate.js"></script>
          <script src="js/vendor/jquery.modal.js"></script>
          <script src="js/main.js"></script>
        <!-- endbuild -->

    </body>
</html>
