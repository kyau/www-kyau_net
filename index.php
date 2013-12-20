<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>/home/kyau</title>
    <link href="http://fonts.googleapis.com/css?family=Electrolize:400" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" />
    <link href="css/screen.css" rel="stylesheet" />
    <link href="/img/fugue-icons/icons/home.png" rel="icon" />
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
  </head>

  <body>
    <div id="bg">
      <div id="toolbar">
      <div class="afterhours circle">
        <img alt="AfterHours" src="img/afterhours.png" /><span>AfterHours</span>
        <p style="font-size:10pt;line-height:12pt;">AfterHours is a gaming community founded in 2010 originating from an MMORPG guild. With the release of Minecraft all of that changed, since then we have grown into a multi-game community.</p>
        <span class="cyan">&rsaquo;</span> <a href="http://kyau.net/afterhours/">visit site</a> <span class="cyan">&lsaquo;</span>
      </div>
      <div class="stuff circle">
        <img alt="My Stuff" src="img/stuff.png" /><span>My Stuff</span>
        <p></p>
        <a class="lnk" href="https://www.dropbox.com/sh/8jxy9hxzhdfng8j/OUHX6IgICi">dropbox</a><br />
        <a class="lnk" href="https://gist.github.com/kyau">gist</a><br />
        <a class="lnk" href="https://github.com/kyau">github</a><br />
        <a class="lnk" href="http://kyau.org/">wiki</a><br />
      </div>
      <div class="projects circle">
        <img alt="Projects" src="img/projects.png" /><span>Projects</span>
        <p></p>

      </div>
      <div class="server circle">
        <img alt="Server" src="img/server.png" /><span>Server</span>
        <p></p>
        <a class="lnk" href="http://dark.kyau.net/">file manager</a><br />
        <a class="lnk" href="http://dark.kyau.net:9091/transmission/web/">transmission</a><br />
        <a class="lnk" href="https://dark.kyau.net:6697">znc</a><br />
      </div>
      </div>
      <div id="logo"><img alt="AfterHours Logo" src="img/logo.png" /></div>
      <div id="info"></div>
      <div id="version">
      <?php
        exec('git rev-parse --short HEAD', $output);
        print $_SERVER['SERVER_SOFTWARE']." PHP/".phpversion().
          ' github/<a href="https://github.com/kyau/www-kyau_net">0.3-'.
          $output[0]."</a>";
      ?>
      </div>
    </div>
  </body>
</html>
<!--
  vim: ts=2 sw=2
-->
