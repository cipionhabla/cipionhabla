<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>cipionhabla&thinsp;&middot;&thinsp;A designer specialized in research</title>
        <meta name="description" content="I focus on understanding user expectations, behaviors, needs, and motivations through methodical, investigative approaches. Moreover, I love working in the fields of UX Design, Visual Design, and Agile Development.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
              <p class="space-stack-m">I worked on the following projects from conception, implementation, and, in some cases, development.</p>
              <h3>Bizagi Mobile App</h3>
              <p class="badge-title"><em>Elements:</em> <span class="badge badge--primary">Design Thinking</span> <span class="badge badge--primary">User Research</span> <span class="badge badge--primary">UX Design</span> <span class="badge badge--primary">Visual Design</span></p>
              <h4>Overview</h4>
              <p class="space-stack-m">Bizagi designs and develops enterprise software for <abbr title="Business Process Management">bpm</abbr>, and his mobile app allow users to execute and control their business processes anywhere. It is a nice product, but quick individual interviews and usability testing reveals that users are struggling with some issues while using the mobile app.</p>
              <h4>Challenge</h4>
              <p class="space-stack-m">The challenge is to understand users, discover pain points and propose a solution to improve their experiences.</p>
              <h4>Process</h4>
              <p class="space-stack-m">I started the process with quick individual interviews and usability testing to understand current problems. During the following phase, I generate ideas and prototypes to validate the redesign. Finally, I return to the users for feedback and put the vision into effect. Now let’s go deeper into each step.</p>
              <div class="design-thinking">
                <a href="includes/understand.html" rel="modal:open" data-modal class="design-thinking__item">
                  <svg viewBox="0 0 96 96"><use xlink:href="#icon-understand" /></svg>
                  <p>Understand</p>
                </a>
                <a href="#modal" data-modal class="design-thinking__item">
                  <svg viewBox="0 0 96 96"><use xlink:href="#icon-explore" /></svg>
                  <p>Explore</p>
                </a>
                <a href="#modal" data-modal class="design-thinking__item">
                  <svg viewBox="0 0 96 96"><use xlink:href="#icon-materialize" /></svg>
                  <p>Materialize</p>
                </a>
              </div>
              <hr>
              <h3>Usability Testing at Bizagi</h3>
              <p class="badge-title"><em>Elements:</em> <span class="badge badge--primary">User Research</span> <span class="badge badge--primary">Scientific Method</span></p>
              <h4>Overview</h4>
              <p class="space-stack-m">Sadly, at Bizagi there are assumptions and requirements aren't ever questioned or tested. Validation is considered harmful to projects.</p>
              <h4>Challenge</h4>
              <p class="space-stack-m">The challenge is to use experimentation, test the assumptions and requirements to discover their validity when it's cheapest to do so.</p>
              <hr>
              <h3>UX Design (<abbr title="Information architecture">ia</abbr> and flows)</h3>
              <h4>Genome: A Design System for Bizagi</h4>
              <p>Enables developers and designers to build rich enterprise experiences with the patterns and established best practices that are native to Bizagi. In addition solves ineffective workflow, company reliability, and user experience.</p>

            </div>
          </main>
          <footer class="spacecraft-stage spacecraft-stage--dark">
            <h2 id="contact"><svg viewBox="0 0 96 96" class="icon-title"><use xlink:href="#icon-contact" /></svg><span>Contact</span></h2>
            <div id="modal" class="modal">
              <h1>Understand</h1>
              <p>I learn about the problem and the intended audience by developing empathy to uncover people’s wants and needs. So to find the famous pain points I used three research methods: Heuristic Evaluation, Individual Interviews and Usability Testing.</p>
            </div>

            <form class="form" action="includes/contact.php" method="post" data-validate>
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
            <p class="spacecraft-signature"><a href="#modal" class="logo" data-modal><svg width="32" height="32"><use href="#cipionhabla" /></svg>cipionhabla</a></p>
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
