<?php

function base(){
    echo str_replace('index.php', '', $_SERVER['PHP_SELF']);
}

function renderBlock($url) {
    switch($url) {
    case 'albums': include 'music/templates/album.php';
        break;
    case 'login': include 'accounts/templates/login_form.php';
        break;
    case 'register': include 'accounts/templates/register_form.php';
        break;
    default:
        include 'templates/base.php';
    }
}

// CODE BY CC Mentor ( wprowadziłem kilka poprawek ) 

function parse_path() {
    $path = array();
    if (isset($_SERVER['REQUEST_URI'])) {
      $request_path = explode('?', $_SERVER['REQUEST_URI']);
  
      $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
      $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
      $path['call'] = utf8_decode($path['call_utf8']);
      if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
        $path['call'] = '';
      }
      $path['call_parts'] = explode('/', $path['call']);
      if(array_key_exists(1,$request_path)){
        $path['query_utf8'] = urldecode($request_path[1]);
        $path['query'] = utf8_decode(urldecode($request_path[1]));
        $vars = explode('&', $path['query']);
        foreach ($vars as $var) {
          $t = explode('=', $var);
          $path['query_vars'][$t[0]] = $t[1];
        }
      }
    }
  return $path;
}
    $path_info = parse_path();
    // echo '<pre>'.print_r($path_info, true).'</pre>';
    $_SESSION['url'] = $path_info['call_parts'][0];


?>
