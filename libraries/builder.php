<?php
ini_set('display_errors', 1);
include(dirname(__FILE__) . '/../config.php');

# Get configuration
function build_top($title_extra = NULL) {
  $title_add = "";
  if ($title_extra != NULL) {
    $title_add = " - ".$title_extra;
  }
  echo "<!DOCTYPE html>
  <html>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/style.css'>
    <script type='text/javascript'> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <title>".$GLOBALS['title']."$title_add</title>
  </head>
  <body>
    <div id='wrapper'>
      <div id='mobile_menu_btn'>
      <a onclick='ToggleMenu(this)'><i class='fas fa-bars fa-lg'></i></a>
      </div>
      <div id='header'>
        <h1><a href='/'>".$GLOBALS['header']."</a></h1>
      </div>
      <div id='nav_bar'>
        <div id='nav_links'>
          <ul>";
    
    // Make navigation      
    foreach ($GLOBALS['pages'] as $page) {
        echo "<li><a href='".$page['url']."'>".$page['title']."</a></li>";
    }            
            
    echo "      </ul>
        </div>
        <div id='nav_social'>
          <a href='https://github.com/#' rel='nofollow' target='_blank'>
            <i class='fab fa-github fa-lg'></i>
          </a>
          <a href='https://www.linkedin.com/#' rel='nofollow' target='_blank'>
            <i class='fab fa-linkedin fa-lg'></i>
          </a>
        </div>
      </div>
      <div id='content'>";
}
      
function build_end() {
  echo '        </div>
      </div>
      <script>
      function ToggleMenu(that) {
        var elem = document.getElementById("nav_bar");
        if (elem.style.display == "") {
          elem.style.display = "block";
        } else if (elem.style.display == "none") {
          elem.style.display = "block";
        } else {
          elem.style.display = "none";
        }
      }
    </script>
    </body>
  </html>
';
}
?>
