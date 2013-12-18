<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AfterHours</title>
    <link href="http://fonts.googleapis.com/css?family=Electrolize:400" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" />
    <link href="css/screen.css" rel="stylesheet" />
    <link href="/img/fugue-icons/icons/controller.png" rel="icon" />
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
  </head>

  <body>
    <div id="bg">
      <div id="toolbar">
      <div class="minecraft circle">
        <img alt="AfterHours" src="/img/minecraft.png" /><span>Minecraft</span>
        <p></p>
        <p style="font-size:10pt;line-height:12pt;">AfterHours Tech is a white-listed modded minecraft server similar to FTB or Tekkit.</p>
        <a class="lnk" href="http://kyau.net/files/">download</a><br />
        <a class="lnk" id="mods" href="#">mod list</a><br />
        <a class="lnk" id="rules" href="#">rules</a><br />
      </div>
      <div class="games circle">
        <img alt="Games" src="/img/games.png" /><span>Games</span>
        <p></p>
        <a class="lnk" href="#">link</a><br />
        <a class="lnk" href="#">link</a><br />
        <a class="lnk" href="#">link</a><br />
        <a class="lnk" href="#">link</a><br />
        <a class="lnk" href="#">link</a><br />
      </div>
      <div class="status circle">
        <img alt="Status" src="/img/status.png" /><span>Status</span>
        <p></p>
        <?php
          // Minecraft status
          $connection = @fsockopen('dark.kyau.net', 25565);
          if ($connection) {
            echo 'Minecraft Server<br /><a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="69" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" style="fill:#5dce33;" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">online</text>
        </svg></a><br />';
            fclose($connection);
          } else {
            echo 'Minecraft Server<br /><a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="71" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" fill="rgba(190,25,25,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">offline</text>
        </svg></a><br />';
          }
          // Murmur status
          $connection = @fsockopen('dark.kyau.net', 64738);
          if ($connection) {
            echo 'Mumble<br /><a href="mumble://dark.kyau.net:64738/?version=1.2.0">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="69" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" style="fill:#5dce33;" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">online</text>
        </svg></a><br />';
            fclose($connection);
          } else {
            echo 'Mumble<br /><a href="mumble://dark.kyau.net:64738/?version=1.2.0">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="71" height="14">
          <rect x="5" y="3" height="10" width="10" rx="3" ry="3" fill="rgba(190,25,25,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">offline</text>
        </svg></a><br />';
          }
        ?>
      </div>
      </div>
      <div id="logo"><img alt="AfterHours Logo" src="/img/logo-afterhours.png" /></div>
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
