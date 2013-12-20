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
        <p style="font-size:10pt;line-height:12pt;">AfterHours is a white-listed modded minecraft server similar to FTB or Tekkit.</p>
        <a class="lnk" href="http://kyau.net/files/">download</a><br />
        <a class="lnk" id="a_mods" href="#">mod list</a><br />
        <a class="lnk" href="#">rules</a><br />
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
      <div id="info"></div>
      <div id="version">
      <?php
        exec('git rev-parse --short HEAD', $output);
        print $_SERVER['SERVER_SOFTWARE']." PHP/".phpversion().
          ' github/<a href="https://github.com/kyau/www-kyau_net">0.3-'.
          $output[0]."</a>";
      ?>
      </div>
      <?php
        // Query Minecraft server for player list
        define('MQ_SERVER_ADDR', 'localhost');
        define('MQ_SERVER_PORT', 25564);
        define('MQ_TIMEOUT', 1);
        require __DIR__ . '/php/MinecraftQuery.class.php';
        $Timer = MicroTime(true);
        $Query = new MinecraftQuery();
        try {
          $Query->Connect(MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT);
        } catch(MinecraftQueryException $e) {
          $Exception = $e;
        }
        $Timer = Number_Format(MicroTime(true) - $Timer, 4, '.', '');
        echo '        <div id="players">';
        if( ( $Players = $Query->GetPlayers( ) ) !== false ):
          echo '         ';
          foreach( $Players as $Player ):
            $Player = htmlspecialchars( $Player );
            echo ' <img src="https://minotar.net/avatar/'.$Player.'/22.png" title="'.$Player.'" />';
          endforeach;
        else:
          echo '';
        endif;
        echo '        </div>';
      ?>
      <div id="mods">
        <div class="close">X</div>
        <h1>Mod List</h1>
        <p>The following is the complete list of mods running on AfterHours. For more information, links to mod websites or Minecraft forum posts are provided by clicking on the mods name. Also included is a playlist containing all of the most recent mod spotlights for all the mods used on the server, this is accessable by clicking on the YouTube icon. If you are new to modded Minecraft this is a great place to start.<br /></p>
        <p style="text-align: center"><a href="http://www.youtube.com/playlist?list=PLN3KTOY1BUHPQQ-46pgQi5b3g0lEMiaVb" title="YouTube Mod Spotlight Playlist"><img alt="YouTube Mod Spotlight Playlist" src="https://s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" /></a></p>
        <p style="opacity: 0.7;">
          <em><a href="#">[mod]</a> &#160;&#xff1a;<span>[version]</span></em>
          <hr />
        </p>
        <p id="m">
          <a href="http://www.minecraftforum.net/topic/1961353-">Agriculture</a> &#160;&#xff1a;<span>1.2.2</span><br />
          <a href="http://www.minecraftforum.net/topic/1932156-">Alternate Terrain Generation</a> &#160;&#xff1a;<span>0.9.3</span><br />
          <a href="http://ae-mod.info/">Applied Energistics</a> &#160;&#xff1a;<span>rv14-finale2</span><br />
          <a href="http://www.minecraftforum.net/topic/2028696-">Ars Magica 2</a> &#160;&#xff1a;<span>1.0.2b</span><br/>
          <a href="http://www.minecraftforum.net/topic/1492661-">Backpacks</a> &#160;&#xff1a;<span>1.22.25</span><br />
          <a href="http://www.bibliocraftmod.com/">BiblioCraft</a> &#160;&#xff1a;<span>1.5.4</span><br />
          <a href="http://www.bibliocraftmod.com/?page_id=50#bibliowoods">BiblioWoods (Biomes 'O Plenty)</a> &#160;&#xff1a;<span>1.3</span><br />
          <a href="http://www.bibliocraftmod.com/?page_id=50#bibliowoods">BiblioWoods (Forestry)</a> &#160;&#xff1a;<span>1.3</span><br />
          <a href="http://www.bibliocraftmod.com/?page_id=50#bibliowoods">BiblioWoods (Natura)</a> &#160;&#xff1a;<span>1.1</span><br />
          <a href="http://www.minecraftforge.net/forum/index.php/topic,13244.0.html">Biomes 'O Plenty</a> &#160;&#xff1a;<span>1.1.3.360</span><br />
          <a href="http://www.mod-buildcraft.com/">Buildcraft</a> &#160;&#xff1a;<span>4.2.1</span><br />
          - <a href="http://www.minecraftforum.net/topic/682821-">Additional Buildcraft Objects</a> &#160;&#xff1a;<span>1.0.7.557</span><br />
          - <a href="http://www.minecraftforum.net/topic/1831791-">LogisticsPipes</a> &#160;&#xff1a;<span>0.7.4.dev.80</span><br />
          <span class="group">ChickenBones Mods &#151;</span><br />
          - <a href="http://www.minecraftforum.net/topic/909223-">ChickenChunks</a> &#160;&#xff1a;<span>1.3.3.3</span><br />
          - <a href="http://www.minecraftforum.net/topic/909223-">EnderStorage</a> &#160;&#xff1a;<span>1.4.3.5</span><br />
          - <a href="http://www.minecraftforum.net/topic/909223-">NotEnoughItems</a> &#160;&#xff1a;<span>1.6.1.8</span><br />
          - <a href="http://www.minecraftforum.net/topic/909223-">Translocators</a> &#160;&#xff1a;<span>1.1.0.13</span><br />
          - <a href="http://www.minecraftforum.net/topic/909223-">Wireless Redstone</a> &#160;&#xff1a;<span>1.4.0.6</span><br />
          <span class="group">Team CoFH &#151;</span><br />
          - <a href="http://teamcofh.com/">Redstone Arsenal</a> &#160;&#xff1a;<span>1.0.0.b1a</span><br />
          - <a href="http://teamcofh.com/">Thermal Expansion</a> &#160;&#xff1a;<span>3.0.0.b10a</span><br />
          <a href="http://www.computercraft.info/">ComputerCraft</a> &#160;&#xff1a;<span>1.58</span><br />
          - <a href="http://www.openperipheral.info/openperipheral/">OpenPeripheral</a> &#160;&#xff1a;<span>0.2.1-preview8</span><br />
          <a href="http://www.minecraftforum.net/topic/1686840-">DartCraft</a> &#160;&#xff1a;<span>0.2.14</span><br />
          <span class="group">denoflionsx's Mods &#151;</span><br />
          - <a href="http://www.minecraftforum.net/topic/1253666-">Creeper Collateral</a> &#160;&#xff1a;<span>2.2.9</span><br />
          - <a href="http://www.minecraftforum.net/topic/1253666-">denPipes</a> &#160;&#xff1a;<span>2.1.18</span><br />
          - <a href="http://www.minecraftforum.net/topic/1253666-">GateCopy</a> &#160;&#xff1a;<span>3.1.4</span><br />
          - <a href="http://www.minecraftforum.net/topic/1253666-">Plugins for Forestry</a> &#160;&#xff1a;<span>3.2.30</span><br />
          <a href="http://www.minecraftforum.net/topic/1776056-">Extra Utilities</a> &#160;&#xff1a;<span>1.0.2</span><br />
          <a href="http://www.minecraftforum.net/topic/1351802-">Factorization</a> &#160;&#xff1a;<span>0.8.23</span><br />
          <a href="http://www.minecraftforum.net/topic/1298016-">Fancy Fences</a> &#160;&#xff1a;<span>4.0.0</span><br />
          <a href="http://forestry.sengir.net/">Forestry</a> &#160;&#xff1a;<span>2.3.1.0</span><br />
          <a href="http://forestry.sengir.net/forum/viewtopic.php?id=17">Magic Bees</a> &#160;&#xff1a;<span>2.1.9</span><br />
          <a href="http://micdoodle8.com/mods/galacticraft">Galacticraft</a> &#160;&#xff1a;<span>2.0.7.904</span><br />
          <span class="group">iChun's Mods &#151;</span><br />
          - <a href="http://ichun.us/mods/death-counter/">Death Counter</a> &#160;&#xff1a;<span>2.0.0</span><br />
          - <a href="http://ichun.us/mods/gravity-gun/">Gravity Gun</a> &#160;&#xff1a;<span>2.0.0</span><br />
          - <a href="http://ichun.us/mods/hats/">Hats</a> &#160;&#xff1a;<span>2.0.2</span><br />
          - <a href="http://ichun.us/mods/hat-stand/">Hat Stand</a> &#160;&#xff1a;<span>2.0.0</span><br />
          - <a href="http://ichun.us/mods/portal-gun/">Portal Gun</a> &#160;&#xff1a;<span>2.0.1</span><br />
          <a href="http://www.industrial-craft.net/">IndustrialCraft2</a> &#160;&#xff1a;<span>2.0.336</span><br />
          - <a href="http://atomicstryker.net/advancedmachines.html">Advanced Machines</a> &#160;&#xff1a;<span>1.6.4</span><br />
          - <a href="http://forum.industrial-craft.net/index.php?page=Thread&threadID=3291">Advanced Solar Panels</a> &#160;&#xff1a;<span>3.4.6</span><br />
          - <a href="http://forum.industrial-craft.net/index.php?page=Thread&threadID=6915">Gravitation Suite</a> &#160;&#xff1a;<span>1.9.8</span><br />
          - <a href="http://universalelectricity.com/mffs/">Modular Force Field System</a> &#160;&#xff1a;<span>3.5.1.269</span><br />
          - <a href="http://forum.industrial-craft.net/index.php?page=Thread&threadID=5915">Nuclear Control</a> &#160;&#xff1a;<span>1.6.2e</span><br />
          - <a href="http://universalelectricity.com/">Universal Electricity Core</a> &#160;&#xff1a;<span>2.3.0.197</span><br />
          <a href="http://www.minecraftforum.net/topic/1720872-">Inventory Tweaks</a> &#160;&#xff1a;<span>1.57-dev-b86</span><br />
          <a href="http://www.minecraftforum.net/topic/981855-">IronChests2</a> &#160;&#xff1a;<span>5.4.1.649</span><br />
          <span class="group">ProfMobius's Mods &#151;</span><br />
          - <a href="http://www.minecraftforum.net/topic/2182366-">JABBA</a> &#160;&#xff1a;<span>1.0.2</span><br />
          - <a href="http://www.minecraftforum.net/topic/2104497-">Opis</a> &#160;&#xff1a;<span>1.1.2_alpha</span><br />
          - <a href="http://www.minecraftforum.net/topic/1846244-">Waila</a> &#160;&#xff1a;<span>1.4.3</span><br />
          <a href="http://machinemuse.net/">Modular Powersuits</a> &#160;&#xff1a;<span>0.9.0-79</span><br />
          <span class="group">Myrathi's Mods &#151;</span><br />
          - <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">ChargePads</a> &#160;&#xff1a;<span>3.0.0.94</span><br />
          - <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">FlatSigns</a> &#160;&#xff1a;<span>1.4.0.15</span><br />
          - <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">FinndusFillies</a> &#160;&#xff1a;<span>1.0.0.7</span><br />
          - <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">InfiniBows</a> &#160;&#xff1a;<span>1.2.0.14</span><br />
          - <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">Obsidian Pressure Plates</a> &#160;&#xff1a;<span>2.0.0.15</span><br />
          - <a href="http://forum.feed-the-beast.com/threads/myrathis-mod-compendium.18505/">Switches</a> &#160;&#xff1a;<span>1.3.0.25</span><br />
          <a href="http://binarymage.com/">Mystcraft</a> &#160;&#xff1a;<span>0.10.11</span><br />
          <a href="http://www.openmods.info/openblocks/">OpenBlocks</a> &#160;&#xff1a;<span>1.2.2</span><br />
          <a href="http://www.minecraftforum.net/topic/2016680-">MineFactory Reloaded</a> &#160;&#xff1a;<span>2.7.4B1-231</span><br />
          <a href="http://projectred.endermedia.org/">Project: Red</a> &#160;&#xff1a;<span>4.2.0-14</span><br />
          <a href="http://qcraft.org/">qCraft</a> &#160;&#xff1a;<span>1.1</span><br />
          <a href="http://www.railcraft.info/">Railcraft</a> &#160;&#xff1a;<span>8.3.1.0</span><br />
          <a href="http://www.minecraftforum.net/topic/546192-">SecretRoomsMod</a> &#160;&#xff1a;<span>4.6.2.319</span><br />
          <a href="http://www.minecraftforum.net/topic/2011841-">Thaumcraft</a> &#160;&#xff1a;<span>4.0.5b</span><br />
          <a href="http://www.minecraftforum.net/topic/1813058-">Thaumic Tinkerer</a> &#160;&#xff1a;<span>2.0-47</span><br />
          <a href="http://www.minecraftforum.net/topic/1659892-">Tinkers' Construct</a> &#160;&#xff1a;<span>1.5.2.2</span><br />
          <a href="http://www.minecraftforum.net/topic/561673-">Twilight Forest</a> &#160;&#xff1a;<span>1.20.3</span><br />
          <a href="http://www.minecraftforum.net/topic/1551715-">XACT</a> &#160;&#xff1a;<span>0.4.3</span><br />
        </p>
      </div>
    </div>
  </body>
</html>
<!--
  vim: ts=2 sw=2
-->
