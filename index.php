<?php
echo "
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>/home/kyau</title>
    <link href='http://fonts.googleapis.com/css?family=Electrolize:400' rel='stylesheet' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' />
    <link href='css/screen.css' rel='stylesheet' />
    <link href='/img/fugue-icons/icons/home.png' rel='icon' />
  </head>

  <body>
    <?php include_once('php/analytics.php') ?>
    <div id='bg'>
      <div id='toolbar'>
      <div class='fpv circle'>
        <img alt='FPV' src='img/afterhours.png' /><span>AfterHours</span>
        <p style='font-size:10pt;line-height:12pt;'>A Custom Modpack for Minecraft v1.8.9 designed for casual and hardcore players alike.</p>
        <span class='cyan'>&rsaquo;</span> <a href='http://kyau.net/afterhours/'>visit site</a> <span class='cyan'>&lsaquo;</span>
      </div>
      <div class='stuff circle'>
        <img alt='My Stuff' src='img/stuff.png' /><span>Links</span>
        <p></p>
        <a class='lnk' href='https://gist.github.com/kyau'>Gist</a><br />
        <a class='lnk' href='https://github.com/kyau'>Github</a><br />
        <a class='lnk' href='https://www.instagram.com/thekyau/'>Instagram</a><br />
        <a class='lnk' href='https://www.youtube.com/channel/UCya_qUkryt4ftq-MsdFuslA'>YouTube</a><br />
        <a class='lnk' href='http://kyau.net/wiki/'>Wiki</a><br />
      </div>
      <div class='projects circle'>
        <img alt='Projects' src='img/projects.png' /><span>Projects</span>
        <p></p>
        <a class='lnk' href='http://bbs.kyau.net/'>BBS</a><br />
        <a class='lnk' href='/d2'>Diablo 2</a><br />
        <a class='lnk' href='http://unity.kyau.net/'>Unity3d</a><br />
        <a class='lnk' href='/zmr250/'>ZMR250</a><br />
      </div>
      <div class='server circle'>
        <img alt='Server' src='img/server.png' /><span>&nbsp;</span>
        <p></p>
        <a class='lnk' href='http://dark.kyau.net/'>file manager</a><br />
      </div>
      </div>
      <div id='logo'><img alt='AfterHours Logo' src='img/logo.png' /></div>
      <div id='info'></div>
      <div id='version'>";
  exec("git rev-parse --short HEAD", $output);
  print $_SERVER['SERVER_SOFTWARE']." PHP/".phpversion()." github/<a href='https://github.com/kyau/www-kyau_net'>0.3-".$output[0]."</a>";
  echo "
      </div>
    </div>

    <script src='//code.jquery.com/jquery-1.11.3.min.js'></script>
    <script src='js/main.js' charset='utf-8'></script>
  </body>
</html>";

?>