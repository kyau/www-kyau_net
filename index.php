<html lang="en">
  <head>
    <title>/home/kyau</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Electrolize:400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600">
    <link rel="stylesheet" href="css/screen.css">
    <link rel="icon" href="img/fugue-icons/icons/home.png">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/main.js"></script>
  </head>

  <body onload="onLoad()">
    <div class="keepCentered">
      <div id="stats">
        <?php
          echo "<a href=\"\" onclick=\"hideStats()\">Close</a><br /><br />";
          include_once "php/statusQuery.php";
          $status = new MinecraftServerStatus();
          //$response = $status->getStatus("127.0.0.1");
          $response = null;
          if (!$response) {
            echo "The Server is offline!";
          } else {
            echo "<br /><center>Information<br /><table>";
            echo "<tr><td>  IP Address </td><td>".$response['hostname'].
              "</td></tr>";
            echo "<tr><td>  Hostname </td><td> dark.kyau.net </td</tr>";
            echo "<tr><td>  Port Number </td><td>25565</td></tr>";
            echo "<tr><td>  Server Version </td><td>".$response['motd'].
              "</td></tr>";
            echo "<tr><td>  Players </td><td>".$response['players']."/".
              $response['maxplayers']."</td></tr>";
            echo "<tr><td>  MOTD </td><td> AfterHours Tech</td></tr>";
            echo "<tr><td>  Ping </td><td>".$response['ping']."ms</td></tr>";
            echo "</table></center>";
          }
        ?>
      </div>
      <div class="afterhours circle">
        <span class="img"><img alt="AfterHours" src="/img/icons/afterhours.png" /></span><span class="txt">AfterHours</span><br />
        <hr />
        <a href="http://kyau.net/files/">files</a><br />
        <a href="http://kyau.net/mc/rules">rules</a><br />
        <a href="http://kyau.net/mc/mods">mod list</a><br />
        <a href="#" onclick="showStats(); return false;">status</a><br />
      </div>
      <div class="common circle">
        <span class="img"><img alt="Favorites" src="/img/icons/common.png" /></span><span class="txt">Favorites</span><br />
        <hr />
        <a href="https://drive.google.com/">drive</a><br />
        <a href="https://gmail.com/">mail</a><br />
        <a href="http://reddit.com/">reddit</a><br />
        <a href="http://twitch.tv/">twitch</a><br />
        <a href="https://youtube.com/">youtube</a><br />
      </div>
      <div class="projects circle">
        <span class="img"><img alt="Projects" src="/img/icons/projects.png" /></span><span class="txt">Projects</span><br />
        <hr />
        <a href="https://www.dropbox.com/sh/8jxy9hxzhdfng8j/OUHX6IgICi">dropbox</a><br />
        <a href="https://github.com/kyau">github</a> (<a href="https://gist.github.com/kyau">gist</a>)<br />
        <a href="http://hg.kyau.net/">mercurial</a><br />
        <a href="http://kyau.org/">personal wiki</a><br />
      </div>
      <div class="server circle">
        <span class="img"><img alt="Server" src="/img/icons/server.png" /></span><span class="txt">Server</span><br />
        <hr />
        <a href="http://dark.kyau.net/">file manager</a><br />
        <a href="http://dark.kyau.net/sql/">sql</a><br />
        <a href="http://dark.kyau.net:9091/transmission/web/">transmission</a><br />
        <a href="https://dark.kyau.net:6697">znc</a><br />
      </div>
      <div class="help circle">
        <span class="img"><img alt="Help" src="/img/icons/other.png" /></span><span class="txt">&#160;Help&#160;</span><br />
        <hr />
        <a href="http://kyau.org:/User:Kyau">about me</a><br /><br />
        <a href="/contact/">contact</a><br />
        <a href="#">&#160;</a><br />
      </div>
      <div id="footer"><div id="search">
        <form method='GET' action='http://www.google.com/search'>
          <input id="q" placeholder="Google Search" name="q" size="75" type="text" style="text-align: center;" />
          <input type="submit" name="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>
        </form>
      </div></div>
    </div>
    <div id="logo_box"><div id="logo"></div></div>
    <div id="info"></div>
    <div id="version">
    <?php
      exec('git rev-parse --short HEAD', $output);
      print $_SERVER['SERVER_SOFTWARE']." PHP/".phpversion().
        ' github/<a href="https://github.com/kyau/www-kyau_net" id="git">0.1-'.
        $output[0]."</a>";
    ?>
    </div>
  </body>
</html>
<!--
  vim: ts=2 sw=2
-->
