<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AfterHours</title>
    <link href="//fonts.googleapis.com/css?family=Electrolize:400" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" />
    <link href="css/screen.css" rel="stylesheet" />
    <link href="/img/fugue-icons/icons/controller.png" rel="icon" />
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
  </head>

  <body>
    <?php include_once("../php/analytics.php") ?>
    <div id="bg">
      <div id="toolbar">
      <div class="minecraft circle">
        <img alt="AfterHours" src="/img/steve.png" /><span>Minecraft</span>
        <p></p>
        <p style="font-size:10pt;line-height:12pt;">AfterHours is a white-listed modded minecraft server similar to FTB or Tekkit.</p>
        <a class="lnk" href="http://kyau.net/files/">download</a><br />
        <a class="lnk" id="a_mods" href="#">mod list</a><br />
        <a class="lnk" id="a_rules" href="#">rules</a><br />
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
          <rect x="7" y="5" height="6" width="6" rx="2" ry="2" fill="rgba(93,206,51,1)" />
          <text dy=".75em" x="22" y="0" fill="rgba(216,216,216,1)">online</text>
        </svg></a><br />';
            fclose($connection);
          } else {
            echo 'Minecraft Server<br /><a href="#">
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
      <div id="logo"><img alt="AfterHours Logo" src="/img/logo-afterhours.png" /></div>
      <div id="mods">
        <div id="mods_scroll">
        <h1>Minecraft Mod List</h1>
        <a class="youtube" href="http://www.youtube.com/playlist?list=PLN3KTOY1BUHPQQ-46pgQi5b3g0lEMiaVb" title="YouTube Mod Spotlight Playlist"><img align="center" alt="YouTube Mod Spotlight Playlist" src="https://s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" />AfterHours Mod Spotlight Playlist</a><br /><br />
        <article>
          <a href="http://www.minecraftforum.net/topic/682821-">Additional Buildcraft Objects</a><br />
          <a href="http://atomicstryker.net/advancedmachines.html">Advanced Machines</a><br />
          <a href="http://forum.industrial-craft.net/index.php?page=Thread&threadID=3291">Advanced Solar Panels</a><br />
          <a href="http://www.minecraftforum.net/topic/1961353-">Agriculture</a><br />
          <a href="http://www.minecraftforum.net/topic/1932156-">Alternate Terrain Generation</a><br />
          <a href="http://ae-mod.info/">Applied Energistics</a><br />
          <a href="http://www.minecraftforum.net/topic/2028696-">Ars Magica 2</a><br/>
          <a href="http://www.minecraftforum.net/topic/1492661-">Backpacks</a><br />
          <a href="http://www.bibliocraftmod.com/">BiblioCraft</a><br />
          <a href="http://www.bibliocraftmod.com/?page_id=50#bibliowoods">BiblioWoods (Biomes 'O Plenty)</a><br />
          <a href="http://www.bibliocraftmod.com/?page_id=50#bibliowoods">BiblioWoods (Forestry)</a><br />
          <a href="http://www.bibliocraftmod.com/?page_id=50#bibliowoods">BiblioWoods (Natura)</a><br />
          <a href="http://www.minecraftforge.net/forum/index.php/topic,13244.0.html">Biomes 'O Plenty</a><br />
          <a href="http://www.mod-buildcraft.com/">Buildcraft</a><br />
          <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">ChargePads</a><br />
          <a href="http://www.minecraftforum.net/topic/909223-">ChickenChunks</a><br />
          <a href="http://www.computercraft.info/">ComputerCraft</a><br />
          <a href="http://www.minecraftforum.net/topic/1253666-">Creeper Collateral</a><br />
          <a href="http://www.minecraftforum.net/topic/1686840-">DartCraft</a><br />
          <a href="http://ichun.us/mods/death-counter/">Death Counter</a><br />
          <a href="http://www.minecraftforum.net/topic/1253666-">denPipes</a><br />
          <a href="http://www.minecraftforum.net/topic/909223-">EnderStorage</a><br />
          <a href="http://www.minecraftforum.net/topic/1776056-">Extra Utilities</a><br />
          <a href="http://www.minecraftforum.net/topic/1351802-">Factorization</a><br />
          <a href="http://www.minecraftforum.net/topic/1298016-">Fancy Fences</a><br />
          <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">FlatSigns</a><br />
          <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">FinndusFillies</a><br />
          <a href="http://forestry.sengir.net/">Forestry</a><br />
          <a href="http://micdoodle8.com/mods/galacticraft">Galacticraft</a><br />
          <a href="http://www.minecraftforum.net/topic/1253666-">GateCopy</a><br />
          <a href="http://forum.industrial-craft.net/index.php?page=Thread&threadID=6915">Gravitation Suite</a><br />
          <a href="http://ichun.us/mods/gravity-gun/">Gravity Gun</a><br />
          <a href="http://ichun.us/mods/hats/">Hats</a><br />
          <a href="http://ichun.us/mods/hat-stand/">Hat Stand</a><br />
          <a href="http://www.industrial-craft.net/">IndustrialCraft2</a><br />
          <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">InfiniBows</a><br />
          <a href="http://www.minecraftforum.net/topic/1720872-">Inventory Tweaks</a><br />
          <a href="http://www.minecraftforum.net/topic/981855-">IronChests2</a><br />
          <a href="http://www.minecraftforum.net/topic/2182366-">JABBA</a><br />
          <a href="http://www.minecraftforum.net/topic/1831791-">LogisticsPipes</a><br />
          <a href="http://forestry.sengir.net/forum/viewtopic.php?id=17">Magic Bees</a><br />
          <a href="http://www.minecraftforum.net/topic/2016680-">MineFactory Reloaded</a><br />
          <a href="http://universalelectricity.com/mffs/">Modular Force Field System</a><br />
          <a href="http://machinemuse.net/">Modular Powersuits</a><br />
          <a href="http://binarymage.com/">Mystcraft</a><br />
          <a href="http://www.minecraftforum.net/topic/909223-">NotEnoughItems</a><br />
          <a href="http://forum.industrial-craft.net/index.php?page=Thread&threadID=5915">Nuclear Control</a><br />
          <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">Obsidian Pressure Plates</a><br />
          <a href="http://www.openmods.info/openblocks/">OpenBlocks</a><br />
          <a href="http://www.openperipheral.info/openperipheral/">OpenPeripheral</a><br />
          <a href="http://www.minecraftforum.net/topic/2104497-">Opis</a><br />
          <a href="http://www.minecraftforum.net/topic/1253666-">Plugins for Forestry</a><br />
          <a href="http://ichun.us/mods/portal-gun/">Portal Gun</a><br />
          <a href="http://projectred.endermedia.org/">Project: Red</a><br />
          <a href="http://qcraft.org/">qCraft</a><br />
          <a href="http://www.railcraft.info/">Railcraft</a><br />
          <a href="http://teamcofh.com/">Redstone Arsenal</a><br />
          <a href="http://www.minecraftforum.net/topic/546192-">SecretRoomsMod</a><br />
          <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">Switches</a><br />
          <a href="http://www.minecraftforum.net/topic/2011841-">Thaumcraft</a><br />
          <a href="http://www.minecraftforum.net/topic/1813058-">Thaumic Tinkerer</a><br />
          <a href="http://teamcofh.com/">Thermal Expansion</a><br />
          <a href="http://www.minecraftforum.net/topic/1659892-">Tinkers' Construct</a><br />
          <a href="http://www.minecraftforum.net/topic/909223-">Translocators</a><br />
          <a href="http://www.minecraftforum.net/topic/561673-">Twilight Forest</a><br />
          <a href="http://universalelectricity.com/">Universal Electricity Core</a><br />
          <a href="http://www.minecraftforum.net/topic/1551715-">XACT</a><br />
          <a href="http://www.minecraftforum.net/topic/1846244-">Waila</a><br />
          <a href="http://www.minecraftforum.net/topic/909223-">Wireless Redstone</a><br />
        </article>
        </div>
        <div class="close">X</div>
        <img class="up" src="/img/fugue-icons/icons/arrow-090.png" />
        <img class="down" src="/img/fugue-icons/icons/arrow-270.png" />
      </div>
      <div id="rules">
        <div id="rules_scroll">
        <h1>Minecraft Server Rules</h1>
        <p><span>Mindful Thoughts...</span><br /><list>
        AfterHours is a place for mature adults (18+) to express their architectural
        and engineering dreams. We hope that we can provide all users with the
        perfect environment with which to foster and encourage growth as a
        Minecraft architect or engineer. Whether it is merely providing the
        canvas, introducing you to your new partner in crime or just providing
        some light conversation while you take over the universe with your
        inter-planetary empire, we hope that you will enjoy your stay at AfterHours.</list></p>
        <p><span>Bannable Offenses</span><br /><list>
        &#xffed; Cheating, Exploits, Griefing, Stealing & Xray<br />
        &#xffed; Building of anything <a href="http://en.wikipedia.org/wiki/Political_correctness">politically incorrect</a><br />
        &#xffed; Building of 1x1 towers/bridges<br />
        &#xffed; Repeated promotion of religious or political discussions<br />
        &#xffed; Advertising or promoting other servers/communities</list></p>
        <p><span>Building Specs</span><br /><list>
        &#xffed; 128 blocks: minimum build distance to not require permission from your neighboors<br />
        &#xffed; Try to make everything you build aesthetically pleasing, we understand
        not everyone is an artist merely try your best<br />
        &#xffed; All major/automated mining operations are to be done in the Deep Dark or on Mining World Alpha/Beta<br />
        &#xffed; Personal Mystcraft ages available upon request (limit 1 per person)<br />
        &#xffed; Mystcraft restrictions: no dense ores / no massively unstable worlds</list></p>
        <p><span>Banned Items</span><br /><list>
        Industrialcraft2 &#151; Nuke<br />
        Mystcraft &#151; Book Binder (OP only)<br />
        Railcraft &#151; Anchor Cart, Primer Track, TNT Cart, World Anchor</list></p>
        </div>
        <div class="close">X</div>
        <img class="up" src="/img/fugue-icons/icons/arrow-090.png" />
        <img class="down" src="/img/fugue-icons/icons/arrow-270.png" />
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
          $version = shell_exec("cat ~/afterhours/start.sh | grep '^VERSION=' | sed -e \"s/VERSION\='//\" -e \"s/'//\"");
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
              echo ' <img src="https://minotar.net/avatar/'.$player.'/22.png" title="'.$player.'" />';
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
  </body>
</html>
<!--
  vim: ts=2 sw=2
-->
