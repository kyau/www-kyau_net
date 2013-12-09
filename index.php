<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=9"/>
    <title>start</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" >
    <link rel="stylesheet" type="text/css" href="css/start.css">
    <link rel="shortcut icon" type="image/gif" href="img/oc.png">
    <script type="text/javascript" src="js/main.js"></script>

  </head>
  <body onload="onLoad()">
    <div class="keepCentered">
      <div id="stats">
        <?php
          echo "<a href='' onClick='hideStats()'>Close</a><br><br>";
          include_once 'php/statusQuery.php';
          $status = new MinecraftServerStatus();
          $response = $status->getStatus('mc.ifargle.com');
          if(!$response) {
            echo"The Server is offline!";
          } else {
            echo "<br><center>Information<br><table>";
            echo "<tr><td>  IP Address </td><td>".$response['hostname']."</td></tr>";
            echo "<tr><td>  Hostname </td><td> mc.ifargle.com </td</tr>";
            echo "<tr><td>  Port Number </td><td>25565</td></tr>";
            echo "<tr><td>  Server Version </td><td>".$response['motd']  ."</td></tr>";
            echo "<tr><td>  Players </td><td>".$response['players'] ."/".$response['maxplayers'] ."</td></tr>";
            echo "<tr><td>  MOTD </td><td> iFargle's Bukkit Server</td></tr>";
            echo "<tr><td>  Ping </td><td>".$response['ping'] ."ms</td></tr>";
            echo "</table></center>";
          }
        ?>
      </div>
      <div id="time"></div>
      <div class="favorites circle">
        Favorites<br><br>
        <a href="http://www.feedly.com">feedly</a><br>
        <a href="http://www.tech-forums.net">tech forums</a><br>
        <a href="http://mc.ifargle.com:32400/web">plex</a><br>
        <a href="http://www.reddit.com">reddit</a><br>
      </div>
      <div class="server circle">
        Server<br><br>
        <a href="http://mc.ifargle.com/Share">share</a><br>
        <a href="https://mc.ifargle.com:10000">webmin</a><br>
        <a href="http://mc.ifargle.com/pydio">file manager</a><br>
        <a href="http://mc.ifargle.com:9091/transmission/web/">transmission</a><br>
        <a href="#" onclick="showStats(); return false;">stats</a><br>
      </div>
      <div class="google circle">
        Google<br><br>
        <a href="http://www.google.com/calendar">calendar</a><br>
        <a href="http://music.google.com">music</a><br>
        <a href="http://gmail.com">mail</a><br>
        <a href="http://drive.google.com">drive</a><br>
      </div>
      <div class="coding circle">
        Coding<br><br>
        <a href="https://chrome.google.com/webstore/detail/secure-shell/pnhechapfaindjhompbnflcldabbghjo?hl=en">terminal</a><br>
        <a href="http://www.dropbox.com">dropbox</a><br>
        <a href="http://www.stackexchange.com">stack exchange</a><br>
        <a href="http://en.cppreference.com/w/">c++</a><br>
      </div>
      <div class="other circle">
        Other<br><br>
        <a href="http://www.mint.com">mint</a><br>
        <a href="https://chrome.google.com/webstore/detail/chrome-remote-desktop/gbchcmhmhahfdphkhkmpfmihenigjmpp/related?hl=en">chrome rdp</a><br>
        <a href="http://www.iheart.com/live/KFI-177/">iHeartRadio</a><br>
        <a href="http://www.debian.org">debian</a><br>
        <a href="http://www.reddit.com/r/linuxquestions+linux4noobs">linux q/a</a><br>
      </div>
      <center>
        <form method='GET' action='http://www.google.com/search'>
            <input id="q" placeholder="Google Search" name="q" size="75" type="text" />
            <input type="submit" name="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>
        </form>
    </center>
  </body>
</html>