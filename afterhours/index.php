<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AfterHours</title>
    <link href="//fonts.googleapis.com/css?family=Electrolize:400" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Orbitron:500" rel="stylesheet" type="text/css">
    <link href="css/screen.css" rel="stylesheet" />
    <link href="/img/fugue-icons/icons/controller.png" rel="icon" />
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.mousewheel-3.1.12.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
    <!-- Fancybox -->
    <link rel="stylesheet" href="js/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <link rel="stylesheet" href="js/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js?v=1.0.6"></script>
    <link rel="stylesheet" href="js/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
  </head>

  <body>
    <?php include_once("../php/analytics.php") ?>
    <div id="bg">
      <div id="toolbar">
      <div class="minecraft circle">
        <img alt="AfterHours" src="/img/minecraft.png" /><br/>
        <p></p>
        <p style="font-size:10pt;line-height:12pt;">AfterHours is a hard-mode progression based modpack for minecraft. It has recently been updated for 1.8.9.</p>
        <a class="lnk" href="http://kyau.net/files/">download</a><br />
        <a class="lnk" id="a_rules">rules</a><br />
      </div>
      <div class="games circle">
        <img alt="Games" src="/img/games.png" /><span>Server Info</span>
        <p></p>
        <p style="font-size:10pt;line-height:12pt;">If you are interested in joining AfterHours contact me to get white-listed.</p>
        <a class="lnk" href="http://steamcommunity.com/id/kyauorg">steamid</a><br />
        <a class="lnk" href="irc://irc.esper.net:+6697/minecraftforge">#minecraftforge/kyau</a><br />
      </div>
      <div class="status circle">
        <img alt="Status" src="/img/status.png" /><br/>
        <p></p>
        <?php
          // Minecraft status
          $connection = @fsockopen('dark.kyau.net', 25565);
          if ($connection) {
            echo 'Forge Server<br /><a>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="69" height="14">
          <rect x="7" y="5" height="6" width="6" rx="2" ry="2" fill="rgba(93,206,51,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">online</text>
        </svg></a><br />';
            fclose($connection);
          } else {
            echo 'Forge Server<br /><a>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="71" height="14">
          <rect x="7" y="5" height="6" width="6" rx="2" ry="2" fill="rgba(190,25,25,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">offline</text>
        </svg></a><br />';
          }
          // Murmur status
          $connection = @fsockopen('dark.kyau.net', 64738);
          if ($connection) {
            echo 'Mumble<br /><a href="mumble://dark.kyau.net:64738/?version=1.2.0">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="69" height="14">
          <rect x="7" y="5" height="6" width="6" rx="2" ry="2" fill="rgba(93,206,51,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">online</text>
          </svg></a><br />';
            fclose($connection);

          } else {
            echo 'Mumble<br /><a href="mumble://dark.kyau.net:64738/?version=1.2.0">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="71" height="14">
          <rect x="7" y="5" height="6" width="6" rx="2" ry="2" fill="rgba(190,25,25,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">offline</text>
        </svg></a><br />';
          }
        ?>
      </div>
      </div>
      <div id="logo">
        <img class="logo" alt="AfterHours Logo" src="/img/logo-afterhours.png" />
        <div id="final-countdown">&nbsp;</div>
        <!--<script type="text/javascript">
          $("#final-countdown")
          .countdown("2015/02/11", function(event) {
            $(this).html(
              event.strftime('<div><span class="time">%w<br/><br/><span class="dur">weeks</span></span></div> <div><span class="time">%d<br/><br/><span class="dur">days</span></span></div> <div><span class="time">%H<br/><br/><span class="dur">hours</span></span></div> <div><span class="time">%M<br/><br/><span class="dur">min</span></span></div> <div><span class="time">%S<br/><br/><span class="dur">sec</span></span></div>')
            );
          });
        </script>-->
        <br/>
        <div id="sneak-peak">
          <a class="fancybox" rel="fancybox" href="/afterhours/sneak-peak/afterhours-1.png" title="Newly added first time load screen."><img src="/afterhours/sneak-peak/afterhours-1-s.png" alt="" /></a>
          <a class="fancybox" rel="fancybox" href="/afterhours/sneak-peak/afterhours-2.png" title="The redesigned main menu."><img src="/afterhours/sneak-peak/afterhours-2-s.png" alt="" /></a>
          <a class="fancybox" rel="fancybox" href="/afterhours/sneak-peak/afterhours-3.png" title="The amazing brand new GUI with BetterFonts integration!"><img src="/afterhours/sneak-peak/afterhours-3-s.png" alt="" /></a>
          <a class="fancybox" rel="fancybox" href="/afterhours/sneak-peak/afterhours-4.png" title="AfterHours modpack support mod adds useful items and the necessary pack textures."><img src="/afterhours/sneak-peak/afterhours-4-s.png" alt="" /></a>
        </div>
      </div>
      <div id="maintenance">
        <h1>Server Maintenance</h1>
        The server is currently undergoing maintenance, please check back later!
      </div>
      <div id="rules">
        <div id="rules_scroll">
        <h1>Server Rules</h1>
        <p><span>Mindful Thoughts...</span><br /><list>
        AfterHours is a place for mature adults (18+) to express their architectural and
        engineering dreams. We hope that we can provide all users with the perfect
        environment with which to foster and encourage growth as a Minecraft architect or
        engineer. Whether it is merely providing the canvas, introducing you to your new
        partner in crime or just providing some light conversation while you take over the
        universe with your inter-dimensional empire, we hope that you will enjoy your stay
        at AfterHours.</list></p>
        <p><span>Bannable Offenses</span><br /><list>
        &#xffed; Cheating, Exploits, Griefing, Stealing & Xray<br />
        &#xffed; Building of anything <a href="http://en.wikipedia.org/wiki/Political_correctness">politically incorrect</a><br />
        &#xffed; Building of 1x1 towers/bridges<br />
        &#xffed; Repeated promotion of religious or political discussions<br />
        &#xffed; Advertising or promoting other servers/communities</list></p>
        <p><span>Building Specs</span><br /><list>
        &#xffed; 256 blocks: minimum build distance to not require permission from your neighboors<br />
        &#xffed; Try to make everything you build aesthetically pleasing, we understand not
        everyone is an artist merely try your best<br />
        </div>
        <div class="close">X</div>
      </div>
      <div id="map"><a href="//dark.kyau.net:8123/" title="Live Map!"><img src="/img/minecraft-24.png" /></a></div>
      <div id="plugins">
      <?php
        // Query Minecraft server for player list
        define('MQ_SERVER_ADDR', 'localhost');
        define('MQ_SERVER_PORT', 25564);
        define('MQ_TIMEOUT', 1);
        require __DIR__ . '/php/MinecraftQuery.class.php';
        $timer = MicroTime(true);
        $query = new MinecraftQuery();
        try {
          $query->Connect(MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT);
        } catch(MinecraftQueryException $e) {
          $Exception = $e;
        }
        $timer = Number_Format(MicroTime(true) - $timer, 4, '.', '');
        if(($info = $query->GetInfo()) !== false) {
          $software = split(' ', $info['Software']);
          $version = shell_exec("cat ~/bin/minecraft | grep '^VERSION=' | sed -e \"s/VERSION\='//\" -e \"s/'//\"");
          if($software[0] == 'Vanilla') {
            $mcpc = 'Forge '.$version;
            echo '<span style="color:#a020f0;font-weight:bold;">Minecraft 1.8.9</span><br/>&#xffed; AfterHours-0.23-11<br/>&#xffed; CompassCoordinates-0.2.6<br/>&#xffed; HelpFixer-1.2.12<br/>&#xffed; JourneyMap-5.1.3<br/>&#xffed; Morpheus-2.0.57';
          } else {
            $mcpc = $software[0].' '.$version;
            $plugins = $info['Plugins'];
            asort($plugins, SORT_NATURAL | SORT_FLAG_CASE);
            foreach($plugins as &$plugin) {
              $tmp = explode(' ',trim($plugin));
              if(!($tmp[0] == 'EssentialsChat' || $tmp[0] == 'EssentialsSpawn' || $tmp[0] == 'Creeper')) {
                $tempver = split('-', $tmp[1]);
                echo '&#xffed; '.$tmp[0].' '.$tempver[0].'<br />';
              }
            }
          }

      ?>
      </div>
      <div id="server1">
      <?php
          echo $mcpc.' &#160; ['.$info['GameType'].']<br />';
      ?>
      </div>
      <div id="server2">
      <?php
          if(($players = $query->GetPlayers()) !== false):
            foreach($players as $player):
              $player = htmlspecialchars($player);
              echo ' <img src="http://minotar.net/avatar/'.$player.'/22.png" title="'.$player.'" />';
            endforeach;
            echo '<br />';
          endif;
          if($info['Players'] == '0') {
            echo '<span style="color:rgba(250,221,45,1);font-weight:bold;position:relative;top:1px;" title="Server Empty!">&#xff01;</span> ';
          } else {
            echo '<span style="color:rgba(93,206,51,1);font-weight:bold;">&#x2713;</span> &#160;';
          }
          echo 'Players online: '.$info['Players'].'/'.$info['MaxPlayers'].'<br />';
          echo '</div>';
        } else {
          echo '</div><div id="server2">';
          echo '<span style="color:rgba(190,25,25,1);font-weight:bold;">&#x2718;</span> &#160;Server offline!';
          echo '</div>';
        }
      ?>
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".fancybox").fancybox({
          helpers : {
            closeBtn : false,
            title : { type : 'inside' },
            buttons : {},
            thumbs : {
              width: 128,
              height: 72
            }
          }
        });
      });
    </script>
  </body>
</html>
<!--
  vim: ts=2 sw=2
-->
