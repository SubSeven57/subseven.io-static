<!DOCTYPE html>
<!-- Made by Daniel Hernandez :D You should hire me. -->

<?php // TODO: ADD ALL OF THIS STUFF TO THE MAIN TEMPLATE: Documentation, switch up the container class ?>

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
  <title>Daniel Hernandez: Web Dev, Music, and Words</title>

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
      <a id="m-menu" href="#" onclick="openNav()">&#9776; Links</a>
    </div>
    <div class="header-c2">
      <p id="your-name"><a href="#">subseven.io</a></p>
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
    <a class="menu-item" href="https://linkedin.com/in/subseven" class="btn" target="_blank" rel="noreferrer noopener"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
    <a class="menu-item" href="https://twitter.com/SanKahlo" class="btn" target="_blank" rel="noreferrer noopener"><i class="fa fa-twitter"></i> Twitter</a></li>
    <a class="menu-item" href="https://github.com/subseven57" class="btn" target="_blank" rel="noreferrer noopener"><i class="fa fa-github"></i> GitHub</a></li>
    <a class="menu-item" href="https://keybase.io/subseven" class="btn" target="_blank" rel="noreferrer noopener"><i class="fa fa-lock"></i> Keybase</a></li>

    <!-- Refer to the documentation to see what icons are supported.
    However, the basics are that you give the "i" element a class of "fa" then "fa-whatever" -->
  </nav>
  <!--End of menu and menu container. -->

  <!-- Begin resume section 1-->
  <h2 class="header-c">Daniel Hernandez</h2>
  <!-- Your own name -->
  <div id="cont-1">
    <!-- Description information resume container-->
    <img src="/img/dan.png" id="user-pic" alt="Daniel Hernandez Image" />
    <h6 id="pre-desc">Sleep deprived student passionate about web development, social impact, music, and FLOSS.</span></h6>
    <!-- Your summary -->
    <p id="post-desc">I've always been a tech kid at heart.</p>
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
          <li><i class="fa fa-code-fork"></i> <strong>HTML</strong>: Experienced </li>
          <li><i class="fa fa-code-fork"></i> <strong>CSS</strong>: Experienced</li>
          <li><i class="fa fa-code-fork"></i> <strong>JavaScript</strong>: Experienced</li>
          <li><i class="fa fa-code-fork"></i> <strong>PHP</strong>: Experienced</li>
          <li><i class="fa fa-code-fork"></i> <strong>Python</strong>: Comfortable</li>
          <li><i class="fa fa-code-fork"></i> <strong>Ruby/Rails</strong>: Somewhat Comfortable</li>
        </ul>

        <h4 class="name-c"> Tools </h4>
        <ul>
          <!-- Refer to this for documentation: https://icons8.com/line-awesome/cheatsheet -->
          <li><i class="fa fa-star"></i> <strong>GNU/Linux</strong>: Very Experienced</li>
          <li><i class="fa fa-star"></i> <strong>Git</strong>: Very Experienced</li>
          <li><i class="fa fa-star"></i> <strong>Sound Design/Editing</strong>: Experienced</li>
          <li><i class="fa fa-star"></i> <strong>CMS Management</strong>: Experienced</li>
          <li><i class="fa fa-star"></i> <strong>Bootstrap</strong>: Experienced</li>
          <li><i class="fa fa-star"></i> <strong>Google Ads Platform</strong>: Experienced</li>
          <li><i class="fa fa-star"></i> <strong>Photo/Vector Editing</strong>: Comfortable</li>
          <li><i class="fa fa-star"></i> <strong>Video Editing</strong>: Somewhat Experienced</li>
        </ul>
      </div>

      <!-- Begin projects container -->
      <div class="list-c" id="projects">
        <h4 class="name-c"> Projects</h4>
        <ul>
          <!-- If you want or need to, you can add icons to programming languages here. Font Awesome has some missing -->
          <li><a href="https://uroneiu.com" class="#" target="_blank" rel="noreferrer noopener"><i class="fa fa-wordpress"></i><strong>URO @ NEIU</strong></a> | Infrastructure, Theme Dev, Maintenance</li>
          <li><a href="https://anklenfoot.com" class="#" target="_blank" rel="noreferrer noopener"><i class="fa fa-buysellads"></i><strong>Ankle N Foot</strong></a> | Marketing, Analytics, SEO</li>
          <li><a href="https://github.com/SubSeven57/sky-website-template" class="#" target="_blank" rel="noreferrer noopener"><i class="fa fa-github"></i><strong>Sky Template</strong></a> | Code</li>
          <li><a href="https://theardentband.com/" class="#" target="_blank" rel="noreferrer noopener"><i class="fa fa-html5"></i><strong>The Ardent</strong></a> | Design, Code</li>
          <li><a href="https://dreambigkid.com/" class="#" target="_blank" rel="noreferrer noopener"><i class="fa fa-wordpress"></i><strong>Dream Big, Kid</strong></a> | Design, Maintenance</li>

        </ul>
      </div>
    </div>

    <!-- Begin experience container-->
    <h2 class="header-c">Experience</h2>
    <div class="body-c">

      <h4 class="name-c">Marketing Assistant at Ankle N Foot</h4> <span class="it"> From Nov 2018 to Present</span>
      <hr class="divider">
      <p class="blurb-c">Leading digital marketing initiatives at Ankle N Foot. Most of my work centers around balancing ad campaigns as well as coming up with organic ways
      to increase their clientele. I also assisted with the launch of their new website by migrating a lot of their old infrastructure.</p>

      <h4 class="name-c">Web Developer at SubSeven Designs</h4> <span class="it"> From Aug 2017 to Present</span>
      <hr class="divider">
      <p class="blurb-c">Created a series of websites for small business owners around the Chicago area. Assisted either in design, deployment, or a combination of both.</p>

      <h4 class="name-c">Social Impact Program Coordinator at GiHub</h4> <span class="it"> From Jun 2017 to Aug 2017</span>
      <hr class="divider">
      <p class="blurb-c"> Developed a survey and email campaign for GitHub nonprofit customers. We wanted to understand how nonprofits and how they used open-source.
      The survey went out to 25,000 accounts. <br> Then, the results were interpreted and analyzed survey information with R, Python, Looker, and SQL. The results of this survey were then compiled into a report and published.</p>

      <h4 class="name-c">J. S. The Exchange</h4> <span class="it"> From Nov 2015 to May 2017</span>
      <hr class="divider">
      <p class="blurb-c">Assisted as sales rep with the maintenance and upkeep of our locations.</p>

      <h4 class="name-c">Instructor at iD Tech</h4> <span class="it"> From Jun 2014 to Aug 2016 (Seasonal)</span>
      <hr class="divider">
      <p class="blurb-c"> During my employment with iD tech, I was primarily in charge of overseeing and ensuring the safety/well-being of a small group of campers, usually composed of 5 to 8 individuals of varying ages, as well as learn, adapt, and teach a provided curriculum. Secondary responsibilities included leading camp activities, collaborating with other instructors/managers to plan events, provide technical support when needed, create supplemental class materials, and lead camper/parent diploma ceremonies every Friday afternoon. I taught HTML/CSS/JavaScript, Minecraft Game Design, and Java modding.</p>


    </div>
    <!-- End experience container -->

    <!-- Begin education container-->
    <h2 class="header-c">Education</h2>
    <div class="body-c">
      <h4 class="name-c"> B.S. Computer Science at Northeastern Illinois University</h4> <span class="it"> From 2017 to Present</span>
      <hr class="divider">
      <p class="blurb-c">Involved in URO (Undocumented, Resilient and Organized): Web Admin, Secretary (Fall 2017 - Spring 2018), President, Web Admin (Fall 2018-Present). Responsible for creating events, overseeing organization initiatives, and creating a welcoming athmosphere.</p>

      <h4 class="name-c"> A.A.S Science at Harold Washington College</h4> <span class="it"> From 2014 to 2017</span>
      <hr class="divider">
      <p class="blurb-c">Involved in STEM Club in 2015-2016. Held office initially as Secretary and then as web developer in 2016.</p>
    </div>
  </div>
  <!-- End education container-->

  <!-- Begin contact container-->
  <h2 class="header-c">Contact Me</h2>
  <div class="body-c">
    <form action="https://formspree.io/subseven.me@gmail.com" method="POST" id="contactMe">
      <div>
        <input type="text" id="name" name="name">
        <label for="name">Name:</label>
      <div>
        <input type="email" id="email" name="user_mail">
        <label for="email">E-Mail:</label>
      </div>
      <div>
        <textarea name="message" id="msg"></textarea>
        <label for="msg">Message:</label>
      </div>
      <div class="form-button">
        <button type="submit">Send your message</button>
      </div>
      <div><em>You will be redirected after submission. I am using FormSpree for validation.</em></div>
    </form>

  </div>
</div>
<!-- End contact container-->

  <!-- Begin footer container, using Manuel Almeida copyleft code -->
  <footer id="site-footer"><span id="footer-cont"><span class="copy-left">©</span>2017 - <span class="copy-left">©</span><?php echo date("Y"); ?></span><br><em>Built with my <a href="https://github.com/SubSeven57/sky-website-template" target="_blank">template.</a></em></footer>
  <!-- End footer container -->

</body>

</html>
