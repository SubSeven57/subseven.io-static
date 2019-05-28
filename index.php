<!DOCTYPE html>
<!-- Made by Daniel Hernandez :D You should hire me. -->
<html>
<head>
  <meta charset="utf-8">

  <!-- Viewport Stuff -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Meta -->
  <meta name="Description" content="Web developer">
  <meta name="Keywords" content="resume, php developer, chicago developer">

  <!-- Normalize CSS: https://github.com/necolas/normalize.css/ -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <!-- The custom style sheet -->
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <!-- Adds LineAwesome Icons CDN -->
  <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
  <!-- The scripts for this page -->
  <script src="js/scripts.js"></script>

  <!-- Your title -->
  <title>Daniel Hernandez: Web Dev, Music, and Words </title>

  <!-- favicon stuff -->
  <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
  <link rel="manifest" href="/img/site.webmanifest">
  <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/img/favicon.ico">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="msapplication-config" content="/img/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <!--Begin header and header containers-->
  <header id="site-header">
    <div class="header-c1">
      <a id="m-menu" href="#" onclick="openNav()">&#9776; Menu</a>
    </div>
    <div class="header-c2">
      <p id="your-name">Daniel Hernandez</p>
      <!-- Your personal brand name -->
    </div>
    <div class="header-c3">
      <a href="#"><img src="img/android-chrome-512x512.png" id="site-logo" alt="SubSeven Logo" /></a>
    </div>
  </header>
  <!--End of header and menu. -->

  <!--Begin menu and menu container. -->
  <nav class="menu-sidebar" id="main-nav">
    <!-- This template uses font-awesome icons. Here you can make use of them to highlight your links.
    Below this, you can replace the contents with your own links.
    -->
    <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">&times;</a>
    <a class="menu-item" href="#" class="btn" target="#"><i class="fa fa-home"></i> Home</a></li>
    <a class="menu-item" href="https://linkedin.com/in/subseven" class="btn" target="_blank" rel="noreferrer noopener"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
    <a class="menu-item" href="#" class="btn" target="_blank" rel="noreferrer noopener"><i class="fa fa-wordpress"></i> Blog</a></li>
    <a class="menu-item" href="https://twitter.com/SanKahlo" class="btn" target="_blank" rel="noreferrer noopener"><i class="fa fa-twitter"></i> Twitter</a></li>
    <a class="menu-item" href="https://github.com/subseven57" class="btn" target="_blank" rel="noreferrer noopener"><i class="fa fa-github"></i> GitHub</a></li>
    <!-- Refer to the documentation to see what icons are supported.
    However, the basics are that you give the "i" element a class of "fa" then "fa-whatever" -->
  </nav>
  <!--End of menu and menu container. -->

  <!-- Begin resume section 1-->
  <h2 class="header-c">Daniel Hernandez</h2>
  <!-- Your own name -->
  <div id="cont-1">
    <!-- Description information resume container-->
    <img src="/assets/img/dan.png" id="user-pic" alt="Daniel Hernandez Image" />
    <h6 id="pre-desc">Sleep deprived student passionate about web development, social impact, music, and FLOSS.</span></h6>
    <!-- Your summary -->
    <p id="post-desc">Your Summary.</p>
    <!-- Your mission -->
  </div>
  <!-- End of resume pre-container. -->

  <!-- Begin resume section 2-->
  <div id="cont-2">
    <!-- Begin showcase container-->
    <h2 class="header-c">Skills</h2>
    <div class="body-c">

      <!-- Begin programming languages container -->
      <div class="list-c" id="programming">
        <h4 class="name-c"> Programming Languages</h4>
        <ul>
          <!-- Refer to this for documentation: https://icons8.com/line-awesome/cheatsheet -->
          <li><i class="fa fa-code-fork"></i> <strong>HTML</strong>: Very Comfortable</li>
          <li><i class="fa fa-code-fork"></i> <strong>CSS</strong>: Very Comfortable</li>
          <li><i class="fa fa-code-fork"></i> <strong>JavaScript</strong>: Very Comfortable</li>
          <li><i class="fa fa-code-fork"></i> <strong>PHP</strong>: Comfortable</li>
          <li><i class="fa fa-code-fork"></i> <strong>Python</strong>: Comfortable</li>
          <li><i class="fa fa-code-fork"></i> <strong>Ruby</strong>: Still Learning</li>
          <li><i class="fa fa-code-fork"></i> <strong>Java</strong>: Would Rather Not</li>
        </ul>
      </div>

      <h4 class="name-c"> Other Skills</h4>

      <ul>
        <li></li>
      </ul>



      <!-- Begin projects container -->
      <div class="list-c" id="projects">
        <h4 class="name-c"> Projects</h4>
        <ul>
          <!-- If you want or need to, you can add icons to programming languages here. Font Awesome has some missing -->
          <li><a href="#" class="#" target="_blank" rel="noreferrer noopener"><i class="devicon-github-plain"></i> Project Title | Date </a></li>
          <li><a href="#" class="#" target="_blank" rel="noreferrer noopener"><i class="devicon-github-plain"></i> Project Title | Date </a></li>
          <li><a href="#" class="#" target="_blank" rel="noreferrer noopener"><i class="devicon-github-plain"></i> Project Title | Date </a></li>
          <li><a href="#" class="#" target="_blank" rel="noreferrer noopener"><i class="devicon-github-plain"></i> Project Title | Date </a></li>
        </ul>
      </div>
    </div>

    <!-- Begin experience container-->
    <h2 class="header-c">Experience</h2>
    <div class="body-c">
      <h4 class="name-c">Title at Job</h4> <span class="it"> From xxxx to xxxx</span>
      <hr class="divider">
      <p class="blurb-c">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <h4 class="name-c">Title at Job</h4> <span class="it"> From xxxx to xxxx</span>
      <hr class="divider">
      <p class="blurb-c">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <!-- End experience container -->

    <!-- Begin education container-->
    <h2 class="header-c">Education</h2>
    <div class="body-c">
      <h4 class="name-c"> B.S. Computer Science at Northeastern Illinois University</h4> <span class="it"> From 2017 to Present</span>
      <hr class="divider">
      <p class="blurb-c"></p>

      <h4 class="name-c"> A.A.S Science at Harold Washington College</h4> <span class="it"> From 2014 to 2017</span>
      <hr class="divider">
      <p class="blurb-c">Involved in STEM Club in 2015-2016. Held office initially as Secretary and then as web developer in 2016.</p>
    </div>
  </div>
  <!-- End education container-->

  <!-- Begin contact container-->
  <h2 class="header-c">Contact Me</h2>
  <div class="body-c">
    <form action="https://formspree.io/subseven.me@gmail.com" method="POST">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
      </div>
      <div>
        <label for="mail">E-Mail:</label>
        <input type="email" id="email" name="user_mail">
      </div>
      <div>
        <label for="msg">Message:</label>
        <textarea id="msg" name="message"></textarea>
      </div>
      <div class="form-button">
        <button type="submit">Send your message</button>
      </div>
    </form>

  </div>
</div>
<!-- End contact container-->


  <!-- Begin footer container, using Manuel Almeida copyleft code -->
  <footer id="site-footer"><span id="footer-cont"><span class="copy-left">©</span>2017 - <span class="copy-left">©</span><?php echo date("Y"); ?></span><br><em>Built with my <a href="https://github.com/SubSeven57/sky-website-template" target="_blank">template.</a></em></footer>
  <!-- End footer container -->

</body>

</html>
