<?php
  /*includes*/
  require_once( 'config.php' );
?>
<!DOCTYPE html>
<html>
    <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta http-equiv="content-language" content="ja" />
    <link rel="stylesheet" href="styles/main.css">
    <title><?php echo ProjectName ?></title>
  </head>
  <body>
    <header>
      <div id="header">
        <h1><?php echo ProjectName; ?></h1>
      </div>
      <nav>
        <ul id="header-navi">
          <li>About&ensp;<?php echo ProjectName; ?></li>
          <li>Business</li>
          <li class="header-navi-right">Login</li>
          <li class="header-navi-right">SignUp</li>
        </ul>
      </nav>
    </header>
    <section>
      <div id=""></div>
    </section>
    <footer>
      <div id="footer">
        <div id="footer-copyright">Copyright (c) <?php echo CopyrightYear . ' ' . CopyrightName; ?> All Rights Reserved.</div>
      </div>
    </footer>
  </body>
</html>