<?php
function SendMessage($content){
  $tg = parse_ini_file('config.ini');
  $apiToken = $tg['token'];
  $chatID = $tg['chatID'];
  $data = [
      'chat_id' => ''.$chatID.'',
      'text' => ''.$content.''
  ];

  if ( ! empty($content)){
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data) );
  }
}

?>