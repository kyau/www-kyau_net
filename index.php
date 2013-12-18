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
      <div class="status circle">
        <img alt="Status" src="img/status.png" /><span>Status</span>
        <p></p>
        <?php
          // Minecraft status
          $connection = @fsockopen('dark.kyau.net', 25565);
          if ($connection) {
            echo '<a href="http://kyau.net/afterhours/">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="74" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" style="fill:#5dce33;" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">mcpc+</text>
        </svg></a><br />';
            fclose($connection);
          } else {
            echo '<a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="74" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" fill="rgba(190,25,25,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">mcpc+</text>
        </svg></a><br />';
          }
          // Murmur status
          $connection = @fsockopen('dark.kyau.net', 64738);
          if ($connection) {
            echo '<a href="mumble://dark.kyau.net:64738/?version=1.2.0">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="86" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" style="fill:#5dce33;" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">murmur</text>
        </svg></a><br />';
            fclose($connection);
          } else {
            echo '<a href="mumble://dark.kyau.net:64738/?version=1.2.0">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="86" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" fill="rgba(190,25,25,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">murmur</text>
        </svg></a><br />';
          }
          // SQL status
          $connection = @fsockopen('dark.kyau.net', 3306);
          if ($connection) {
            echo '<a href="http://dark.kyau.net/sql/">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="48" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" style="fill:#5dce33;" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">sql</text>
        </svg></a><br />';
            fclose($connection);
          } else {
            echo '<a href="http://dark.kyau.net/sql/">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="48" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" fill="rgba(190,25,25,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">sql</text>
        </svg></a><br />';
          }
          // WWW1 status
          $connection = @fsockopen('dark.kyau.net', 80);
          if ($connection) {
            echo '<a href="http://kyau.net/">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="69" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" style="fill:#5dce33;" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">www1</text>
        </svg></a> ';
            fclose($connection);
          } else {
            echo '<a href="http://kyau.net/">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="69" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" fill="rgba(190,25,25,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">www1</text>
        </svg></a> ';
          }
          // WWW2 status
          $connection = @fsockopen('kyau.org', 80);
          if ($connection) {
            echo '<a href="http://kyau.org/">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="72" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" style="fill:#5dce33;" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">www2</text>
        </svg></a><br />';
            fclose($connection);
          } else {
            echo '<a href="http://kyau.org/">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="72" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" fill="rgba(190,25,25,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">www2</text>
        </svg></a><br />';
          }
        ?>
      </div>
      </div>
      <div id="logo"><img alt="AfterHours Logo" src="img/logo.png" /></div>
      <div id="info"></div>
      <div id="version">
      <?php
        exec('git rev-parse --short HEAD', $output);
        print $_SERVER['SERVER_SOFTWARE']." PHP/".phpversion().
          ' github/<a href="https://github.com/kyau/www-kyau_net">0.1-'.
          $output[0]."</a>";
      ?>
      </div>
    </div>
  </body>
</html>
<!--
  vim: ts=2 sw=2
-->
